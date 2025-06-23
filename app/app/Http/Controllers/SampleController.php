<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    /**
     * Display a sample message.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // 'sample'ビューに'message'変数を渡す
        return view('sample', ['message' => 'こんにちは、Laravel!']);
    }
}
