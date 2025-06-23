<!-- 1から作成したもの -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>タスク作成</title>
</head>
<body>
    <h1>タスク作成</h1>
    @if(isset($message))
        <p>{{ $message }}</p>
    @endif
    <form action="/tasks" method="POST">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @csrf
        <label for="title">タイトル</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="content">内容</label>
        <input type="text" name="content" id="content">
        <br>
        <button type="submit">作成</button>
    </form>
</body>
</html> -->

<!-- resources/views/layouts/form.blade.phpを継承したもの -->
@extends('layouts.form')
@section('title', 'タスク作成')
@section('action', '/tasks')
@if(isset($message))
    @section('message', $message)
@endif
@section('content')
    <label for="title">タイトル</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}">
    <br>
    <label for="content">内容</label>
    <input type="text" name="content" id="content" value="{{ old('content') }}">
    <br>
    <button type="submit">作成</button>
@endsection