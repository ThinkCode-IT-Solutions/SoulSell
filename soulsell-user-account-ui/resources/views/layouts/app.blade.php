<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>User Account</title>
</head>
<body>
    @include('partials.header')
    <div class="flex">
        @include('partials.sidebar')
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>