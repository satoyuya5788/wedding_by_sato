<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Wedding;
use App\Models\User;

class SiteWeddingController extends Controller
{
    protected $wedding = '';
    
    public function __construct (){
        $this->wedding = new Wedding();
    }
    
    /**
     * 招待状登録フォーム画面を表示
     * 
     */
    public function showCreate()
    {
        return view('wedding.site.index');
    }
    
    /**
     * 招待状を登録する
     */
    public function executeStore(StoreRequest $request)
    {
    $judgeNewRegister = User::where('name', session('simple_auth')[0])->value('page_flg');
        if ($judgeNewRegister === 0) {
            $registerdWeddingData = $this->wedding->storeWedding($request);
            if ($registerdWeddingData) {
                if ($registerdWeddingData->attend == 1) {
                    return view('wedding.site.guide');
                } elseif ($registerdWeddingData->attend == 0) {
                    return view('wedding.site.non_participation');
                }
            }
            } else {
                dd('次は更新処理から！');
                return redirect(route("error"));
            }
        return abort(404);
    }

    /**
     * 招待状を登録する
     */
    public function error()
    {
        return view('error');
    }
}
