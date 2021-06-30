<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Models\User;

class SimpleLoginController extends Controller
{

    public function authjudge(Request $request)
    {
        if (session("simple_auth")) {
            $name = session("simple_auth");
            $pageFlg = User::where('name', $name)->value('page_flg');
            switch ($pageFlg) {
                case '0':
                    return view("wedding.site.index");
                    break;
                case '1':
                    return view("wedding.site.guide");
                    break;
                case '2':
                    return view("wedding.site.non_participation");
                    break;
                default:
                    return abort(404);
                    break;
            }
        } else {
            return redirect("home");
        }
        return abort(404);
    }


    public function login(StoreRequest $request)
    {
        //入力内容をチェックする
        $name = $request->input("loginusername");

        // 登録時にユニークバリデーションを設定してるため、入力値の存在チェックだけで認証
        $userData = User::all();
        $nameData = [];
        foreach ($userData as $key => $user) {
            array_push($nameData, $user->name);
        }
        $authCheckByName = in_array($name, $nameData);

        //ログイン成功
        if ($authCheckByName) {
            $pageFlg = User::where('name', $name)->value('page_flg');

            session()->put("simple_auth", [$name, $pageFlg]);

            switch ($pageFlg) {
                case '0':
                    return redirect(route('site'));
                    break;
                case '1':
                    return view("wedding.site.guide");
                    break;
                case '2':
                    return view("wedding.site.non_participation");
                    break;
                default:
                    return abort(404);
                    break;
            }
        }

        //ログイン失敗
        return redirect("/home")->withErrors([
            "login" => "お名前(かな)を正しく入力して下さい。"
        ])->withInput();
    }
}
