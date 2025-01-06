<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('index.css') }}">
<link rel="stylesheet" href="{{ asset('Master.css') }}">

@yield('links')
<title> @yield('title') </title>


<body @if (session('mode') == 'dark') class="darkMore" @endif>
    @include('main_header')
    <div class="r-b-s wmia">
        @include('layouts.sideBare0')
        <main class="bg-l">
            @yield('content')
        </main>
        @include('layouts.sideBare1')
    </div>
</body>

</html>
