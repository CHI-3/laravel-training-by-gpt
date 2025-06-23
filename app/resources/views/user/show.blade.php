<!-- <!DOCTYPE html>
<html>
<head>
    <title>ユーザー詳細</title>
</head>
<body>
    <h1>{{ $name }}さんのプロフィール</h1>
</body>
</html> -->
@extends('layouts.app')

@section('title', 'ユーザー詳細')

@section('content')
    <h1>{{ $name }}さんのプロフィール</h1>
@endsection