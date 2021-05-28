<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Laravel 8</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container mx-auto p-8">
        @section('header')
        <header class="mb-12">
            <h1 class="text-3xl">@yield('title')</h1>
        </header>
        @endsection

        @yield('header')
        @yield('main')
    </div>
</body>
</html>
