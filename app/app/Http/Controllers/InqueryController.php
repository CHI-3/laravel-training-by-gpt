<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InqueryController extends Controller
{
    public function create(){
        return view ('inqueries.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:50',
            'age' => 'required|integer|min:0|max:200',
            'tel' => 'required|regex:/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{4}$/',
        ]);
        // 成功した場合の処理（例：データベースへの保存など）
        return redirect()->route('inqueries.create')->with('success', 'お問い合わせを受け付けました。');
    }
}
