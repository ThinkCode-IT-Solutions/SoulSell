<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">SoulSell</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('user.orders') }}">Orders</a></li>
                    <li><a href="{{ route('user.profile') }}">Profile</a></li>
                    <li><a href="{{ route('user.settings') }}">Settings</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>