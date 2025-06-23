<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // バリデーションを実施
        $request->validate(
            [
                'title' => [
                    'required',
                    'string',
                    'max:100'
                ],
                'content' => [
                    'nullable',
                    'string',
                    'max:1000'
                ]
            ],
            [],
            [
                'title' => 'タイトル',
                'content' => '内容'
            ]
        );
        $success = 'タスクを作成しました';
        \Log::debug('success');
        return view('tasks.create', ['message' => $success]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
