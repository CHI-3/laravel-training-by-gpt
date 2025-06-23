<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * ユーザー情報を表示
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('user', [
            'isAdmin' => true // true / false を切り替えると画面表示が変わる
        ]);
    }

    public function show($name)
    {
        return view('user.show', ['name' => $name]);
    }
}
