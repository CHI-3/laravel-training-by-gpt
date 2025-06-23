<!DOCTYPE html>
<html>
<head>
    <title>お問い合わせ</title>
</head>
<body>
    <h1>お問い合わせ</h1>
    <form action="/contact" method="POST">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @csrf
        <label for="name">名前</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <br>
        <label for="email">メール：</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        <br>
        <button type="submit">送信</button>
        <br>
        <a href="/article">戻る</a>
    </form>
</body>
</html>