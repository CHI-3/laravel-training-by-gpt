<!DOCTYPE html>
<html>
<head>
    <title>Sample</title>
</head>
<body>
    <!-- <h1>{{ $isAdmin ? '管理者' : '一般ユーザー'}}です</h1> -->
    @if ($isAdmin)
        <h1>管理者です</h1>
    @else
        <h1>一般ユーザーです</h1>
    @endif
</body>
</html>