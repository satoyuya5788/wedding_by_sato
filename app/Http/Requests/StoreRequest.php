<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // サイト側のログインバリデーション：登録はしないが、ここで一緒にバリデーションしてる
        if ($this->has('loginusername')) {
            return [
                'loginusername' => [
                    'required',
                    function ($attribute, $value, $fail) {
                        if (preg_match('/[^ぁ-んー]/u', $value) !== 0) {
                          return $fail('お名前は必ずひらがなで、スペースを空けずに入力してください。');
                        }
                    },
                ]
            ];
        }

        if ($this->has('admin_user') && $this->has('admin_password')) {
            return [
                'admin_user' => 'required',
                'admin_password' => 'required'
            ];
        }

        
        // 管理側でのユーザ登録バリデーション：登録処理
        if ($this->has('username')) {
            return [
                'username' => [
                    'required',
                    'unique:users,name',
                    function ($attribute, $value, $fail) {
                        if (preg_match('/[^ぁ-んー]/u', $value) !== 0) {
                          return $fail('名前(かな)はひらがなで入力してください。');
                        }
                    },
                ]
            ];
        }

        // 招待状：登録処理
        return [
            'listchart' => 'nullable',
            'present' => 'nullable',
            'memo' => 'nullable|max:5500',
            'attend' => 'required',
            'human' => 'required',
            'name' => 'required|max:255',
            'name_low' => 'required|max:255',
            'name_kana' => 'required|max:255',
            'name_kana_low' => 'required|max:255',
            'post_num' => 'required|max:20',
            'adress' => 'required|max:255',
            'building' => 'nullable|max:255',
            'phone_num' => 'required|max:255',
            'mail' => 'required|max:255',
            'partner_name_one' => 'nullable|max:255',
            'partner_name_two' => 'nullable|max:255',
            'partner_name_three' => 'nullable|max:255',
            'allergies' => 'nullable|max:255',
            'content' => 'nullable|max:5500',
        ];
    }
}
