<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserController
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:128'],
            'e-mail'=>['required','max:254'],
            'password'=>['required','max:72'],
        ];
    }


    public function index()
    {
         return view('index');

         // データの取得
        $datum = $request->validated();
        //var_dump($datum); exit;

        // 認証
        if (User::attempt($datum) === null ) {
            return back()
                   ->withInput() // 入力値の保持
                   ->withErrors(['user' => 'The name field is required.',])
                    ->withErrors(['user' => 'The email field is required.',])
                    ->withErrors(['user' => 'The password field is required.',])
                   // エラーメッセージの出力
                   ;
                 
                   
                   
        }


    }

    public function register()
    {
         return view('user/register');


    }

}