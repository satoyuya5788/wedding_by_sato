<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; 

class Wedding extends Model
{
    use HasFactory;

    protected $tables = 'weddings';

    protected $fillable = [
        'user_id',
        'human',
        'listchart',
        'memo',
        'present',
        'attend',
        'name',
        'name_low',
        'name_kana',
        'name_kana_low',
        'post_num',
        'adress',
        'building',
        'phone_num',
        'partner_name_three',
        'partner_name_two',
        'partner_name_one',
        'allergies',
        'content',
        'created_at',
        'updated_at',
    ];
    

    Public function user()
    {
      return $this->belongsTo('User');
    }
    
    public function getAttendAttribute ($value) {
        if ($value == 1) {
            return true;
        } else {
            return false;
        }
        return abort(404);
    }
    
    public function getCreatedAtAttribute ($value) {
        $time = substr($value, 0, 10);
        $answerd_at = str_replace("-","/",$time);
        return $answerd_at;
    }

    public function AttendCount($humanFlg) {
        return self::where('human', $humanFlg)->where('attend', 1)->count();
    }

    public function getFullNameAttribute ($value) {
        $name = $this->name.$this->name_low;
        $name_kana = $this->name_kana.$this->name_kana_low;
        $fullName = $name.'('.$name_kana.')';
        return $fullName;
    }

    public function getFullNameKanaAttribute ($value) {
        $fullNamekana = $this->name_kana.$this->name_kana_low;
        return $fullNamekana;
    }

    public function getPartnerAttribute ($value) {
        $partners = [];

        $partners = [
            $this->partner_name_one,
            $this->partner_name_two,
            $this->partner_name_three,
        ];

        $partnerData = [];
        foreach ($partners as $key => $partner) {
            if (isset($partners[$key])) {
                $partnerData[] = $partner;
            }
        }
        $partnerCount = count($partnerData);
        return $partnerCount;
    }


    public function getAllWeddingData($request){
        $weddings = $this->getAllWedding($request);

        $partner_one = [];
        $partner_two = [];
        $partner_three = [];
        foreach($weddings as $key => $wedding){
            if (!empty($wedding->partner_name_one)) {
                array_push($partner_one, $wedding->partner_name_one);
            }
            if (!empty($wedding->partner_name_two)) {
                array_push($partner_two, $wedding->partner_name_two);
            }
            if (!empty($wedding->partner_name_three)) {
                array_push($partner_three, $wedding->partner_name_three);
            }
        }
        
        $partnerCount = count($partner_one) + count($partner_two) + count($partner_three);
        
        $friendCount = count($weddings);
        if ($friendCount > 0) {
            $humanFlg = $weddings->first()->human;
            $attendCount = $this->AttendCount($humanFlg);
        } else {
            $humanFlg = 0;
            $attendCount = 0;
        }

        return [$weddings, $friendCount, $humanFlg, $attendCount, $partnerCount];
    }
    
    
    public function getFriendsByRouteName($request){
        $routeName = \Route::currentRouteName();
        switch ($routeName) {
            // ゆうや
            case 'list':
                $allWedding = $this->getMyfriendData();
                break;
            // さとこ
            case 'list_for_wife':
                $allWedding = $this->getWivesfriendData();
                break;
            default:
                if ($request->human == 1) {
                    $allWedding = $this->getMyfriendData();
                }
                if ($request->human == 2) {
                    $allWedding = $this->getWivesfriendData();
                }
                break;
        }
        return $allWedding;
    }
    
    /**
     * weddingsテーブルから全件取得
     * 
     * @param 
     * @return 
     */
    public function getAllWedding ($request) {
        $allWeddingData = $this->getFriendsByRouteName($request);
        return $allWeddingData;
    }

    public function getMyfriendData () {
        return self::orderBy('id', 'desc')->where('human', 1)->get();
    }

    public function getWivesfriendData () {
        return self::orderBy('id', 'desc')->where('human', 2)->get();
    }

    /**
     * weddingsテーブルから1件取得
     * 
     * @param 
     * @return 
     */
    public function getOnlyOneWedding ($id) {
        $onlyOneWedding = self::find($id);
        
        return $onlyOneWedding;
    }

    /**
     * Weddingテーブルに登録
     * 
     * @param 
     * @return 
     */
    public function storeWedding ($request) {
        DB::beginTransaction();
        try {
            // 招待状テーブルにここで登録
            $registerWeddingData = $request->all();

            unset($registerWeddingData['_token']);
            
            // ユーザID登録処理
            $username = session('simple_auth')[0];
            $userId = User::where('name', $username)->value('id');
            $registerWeddingData['user_id'] = $userId;
            
            $registerWeddingData['created_at'] = date('Y/m/d');
            $registerWeddingData['updated_at'] = null;
            
            // 案内状の画面でリロードや、ブラウザバッグされても対処
            $wedding = self::updateOrCreate(['user_id' => $userId], $registerWeddingData); 

            if ($wedding->attend) {
                User::where('id', $userId)->update(['page_flg' => 1]);
            }
            if (!$wedding->attend) {
                User::where('id', $userId)->update(['page_flg' => 2]);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::debug($e->getMessage());
            return abort(500);
        } 
        return $wedding;
    }

    /**
     * Weddingテーブルに登録
     * 
     * @param 
     * @return 
     */
    public function adminStoreWedding ($request) {
        DB::beginTransaction();
        try {
            // 招待状テーブルにここで登録
            $registerWeddingData = $request->all();
            unset($registerWeddingData['_token']);

            if (!$request->has('listchart')) {
                $registerWeddingData['listchart'] = null; 
            }
            
            $registerWeddingData['created_at'] = date('Y/m/d');
            $registerWeddingData['updated_at'] = null;
            $wedding = self::create($registerWeddingData); 

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::debug($e->getMessage());
            return abort(500);
        } 
        return $wedding;
    }

    /**
     * Weddingテーブルに登録
     * 
     * @param 
     * @return 
     */
    public function updateWedding ($request) {
        $updateWeddingData = [];

        DB::beginTransaction();
        try {
            // 招待状テーブルにここで登録
            $updateWeddingData = $request->all();
            unset($updateWeddingData['_token']);
            
            $updateWeddingData['updated_at'] = date('Y/m/d');
            
            if (!$request->has('listchart')) {
                $updateWeddingData['listchart'] = null; 
            }
            self::where('id', $request->input('id'))->update($updateWeddingData);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::debug($e->getMessage());
            return abort(500);
        } 

        return ;
    }

    /**
     * USERテーブルに登録
     * 
     * @param 
     * @return 
     */
    public function loginUserStore ($request) {
        DB::beginTransaction();
        try {
            $loginUserData = [];
            $loginUserData['name'] = $request->input('username');
            $createFlg = User::create($loginUserData);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::debug($e->getMessage());
            return abort(500);
        } 

        return $createFlg;
    }
}

