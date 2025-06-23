<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <h1>@yield('title')</h1>
        <p>@yield('message')</p>
        <form action="@yield('action')" method="POST">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            @csrf
            @yield('content')
        </form>
    </body>
</html>