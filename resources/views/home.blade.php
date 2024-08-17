<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>@yield('title','home')</title>
</head>
<body>
    <header>
        <nav>
            <a href="/">الرئيسية</a>
            <a href="{{route('posts.index')}}">عرض تعليقات السمتخدم</a>
            <a href="{{route('posts.create')}}">ورقة جديده</a>
            <a href="{{route('posts.index')}}">عرض الاوراق</a>
        </nav>
    </header>
    <aside>
        @section('sidebar')
         <h1 style="text-align: center;font-size:50px;">Wlecom</h1>
        @show
    </aside>
    <footer>
         @section("footer")
    </footer>
</body>
</html>