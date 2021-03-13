<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Wedding;

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
        return abort(404, 'hello');
        return view('wedding.site.index');
    }
    
    /**
     * 招待状を登録する
     */
    public function executeStore(StoreRequest $request)
    {
        $existJudge = $this->wedding->where('mail', $request->mail)->count();
        if ($existJudge === 0) {
            $registerdWeddingData = $this->wedding->storeWedding($request);
            if ($registerdWeddingData) {
                if ($registerdWeddingData->attend == 1) {
                    return view('wedding.site.guide');
                } elseif ($registerdWeddingData->attend == 0) {
                    return view('wedding.site.non_participation');
                }
            }
            } else {
                if ($request->attend == 1) {
                    return view('wedding.site.guide');
                } elseif ($request->attend == 0) {
                    return view('wedding.site.non_participation');
                }
        }
        return abort(404);
    }
}
