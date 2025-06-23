<!-- <!DOCTYPE html>
<html>
<head>
    <title>Greet</title>
</head>
<body>
    <h1>こんにちは、{{ $name }}さん</h1>
</body>
</html> -->
@extends('layouts.app')
@section('content')
    <h1>こんにちは！{{ $name }}さん</h1>
@endsection