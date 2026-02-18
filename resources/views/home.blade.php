
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1>home</h1>
    @if(\Illuminate\Support\Facades\Auth::check())
        <p>gggggggggg</p>
    @endif

    @auth
        <h1>{{\Illuminate\Support\Facades\Auth::user()->name}}</h1>
        <p>للاگین شده</p>

        <a href='{{route("logout")}}'>
            logout
        </a>

    @else
        <p>لاگین نشده</p>
        <a href='{{route("register")}}'>
            register
        </a>
        <a href='{{route("login")}}'>
            login
        </a>
    @endauth
    <a href="{{ route('posts') }}">
        Posts
    </a>
    <hr>
    <a href='/posts'>
        Posts
    </a>

</body>
</html>
