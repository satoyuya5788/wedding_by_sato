<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Redirect;
use App\Models\Wedding;
use App\Models\User;

class WeddingController extends Controller
{
    protected $wedding = '';
    
    public function __construct (){
        $this->wedding = new Wedding();
    }
    
    /**
     * 招待状一覧を表示
     * 
     * @param 
     * @return view
     * ユウヤ
     */
    public function showList(Request $request)
    {
        list($weddings, $friendCount, $humanFlg, $attendCount, $partnerCount) = $this->wedding->getAllWeddingData($request);
        
        return view('wedding.admin.list', [
            'weddings' => $weddings,
            'friendCount' => $friendCount,
            'humanFlg' => $humanFlg,
            'attendCount' => $attendCount,
            'partnerCount' => $partnerCount,
        ]);
}

    /**
     * 追加登録フォームを表示
     * 
     * @param 
     * @return view
     * ユウヤ
     */
    public function create()
    {

        return view('wedding.admin.create');
    }

    /**
     * 追加登録処理
     * 
     * @param 
     * @return view
     * ユウヤ
     */
    public function adminStore(StoreRequest $request)
    {
        $registerdWeddingData = $this->wedding->adminStoreWedding($request);
        if ($registerdWeddingData) {
            list($weddings, $friendCount, $humanFlg, $attendCount, $partnerCount) = $this->wedding->getAllWeddingData($request);
            
            \Session::flash('flash_message', '登録に成功しました。');
            return Redirect::route('list', compact(
                'weddings',
                'friendCount',
                'attendCount',
                'humanFlg',
                'partnerCount',
            ));
        }
        return abort(404);
    }

    /**
     * ログインユーザ登録
     * 
     * @param 
     * @return view
     * ユウヤ
     */
    public function loginUserCreate()
    {
        $userData = User::orderBy('id', 'desc')->get();
        $notAnswered = User::where('page_flg', 0)->count();
        $attendance = User::where('page_flg', 1)->count();
        $notAttendance = User::where('page_flg', 2)->count();

        return view('wedding.admin.loginuser_create', [
                'userData' => $userData,
                'notAnswered' => $notAnswered,
                'attendance' => $attendance,
                'notAttendance' => $notAttendance
            ]
        );
    }
    /**
     * ログインユーザ登録
     * 
     * @param 
     * @return view
     * ユウヤ
     */
    public function loginUserStore(StoreRequest $request)
    {
        $loginUserData = $this->wedding->loginUserStore($request);
        if ($loginUserData) {
            // \Session::flash('flash_message', '登録に成功しました!');
            return redirect(route('loginuser.create'));
        }
        return abort(404);
    }

    /**
     * 招待状詳細を表示
     * 
     * @param 
     * @return view
     */
    public function showDetail($id)
    {
        $wedding = $this->wedding->getOnlyOneWedding($id);
        if (empty($wedding)) {
            \Session::flash('flash_message', 'データがありませんでした。');
            return redirect(route('list'));
        }

        return view('wedding.admin.detail', ['wedding' => $wedding]);
    }

    /**
     * 招待状編集フォーム画面を表示
     * 
     */
    public function showEdit($id)
    {
        $wedding = $this->wedding->getOnlyOneWedding($id);
        if (empty($wedding)) {
            \Session::flash('flash_message', 'データがありませんでした。');
            return redirect(route('list'));
        }

        return view('wedding.admin.edit', ['wedding' => $wedding]);
    }

    /**
     * 招待状を更新する
     */
    public function executeUpdate(Request $request)
    {
        $this->wedding->updateWedding($request);

        list($weddings, $friendCount, $humanFlg, $attendCount, $partnerCount) = $this->wedding->getAllWeddingData($request);

        \Session::flash('flash_message', '更新に成功しました。');
        return view('wedding.admin.list', [
            'weddings' => $weddings,
            'friendCount' => $friendCount,
            'humanFlg' => $humanFlg,
            'attendCount' => $attendCount,
            'partnerCount' => $partnerCount,
        ]);
    }
}