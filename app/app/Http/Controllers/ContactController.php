<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function create(){
        \Log::info('ログ');
        return view('contacts.create');
    }

    public function store(Request $request){
        // バリデーション
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email',
        ],
        [
            'name.required' => '名前は必須です',
            'name.string' => '名前は文字列で入力してください',
            'name.max' => '名前は50文字以内で入力してください',
            'email.required' => 'メールは必須です',
            'email.email' => 'メールの形式が不正です',
        ]);
    }
}
