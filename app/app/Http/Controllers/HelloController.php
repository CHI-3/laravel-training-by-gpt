<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    /**
     * Display a greeting.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        return view('hello', [ 'message' => 'こんにちは、研修生さん！']);
    }
}
