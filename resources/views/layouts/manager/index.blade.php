<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
    @section('text')
    Hello it's me
    @show

    @if(session('user'))
        Dang nhap roi
    @endif
    <div style="display: flex;">
    @include('layouts.manager.sections.menu');

    @yield('content')
    </div>
</body>
</html>
