@extends('layouts.form')
@section('title', 'お問い合わせ')
@section('action', '/inquery')
@section('content')
    <label for="name">名前</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}">
    <br>
    <label for="age">年齢</label>
    <input type="text" name="age" id="age" value="{{ old('age') }}">
    <br>
    <label for="tel">電話番号</label>
    <input type="text" name="tel" id="tel" value="{{ old('tel') }}">
    <br>
    <button type="submit">送信</button>
@endsection