<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a greeting.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $text = 'Laravel学習を始めましょう！';
        return view('message', ['text' => $text]);
    }
}
