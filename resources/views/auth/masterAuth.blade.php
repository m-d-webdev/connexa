<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('index.css') }}">
    <link rel="stylesheet" href="{{ asset('Master.css') }}">
</head>
<body 
@if (session('mode') == "dark")
    class="darkMore"
@endif
>

    @include('auth.Auth_header')
    <main class="mainAuthCmpts">
        @yield('content')
    </main>
</body>
</html>