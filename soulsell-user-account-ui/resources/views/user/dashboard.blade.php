@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-xl font-semibold">Welcome Back!</h2>
            <p class="mt-2">Here’s a quick overview of your account.</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-xl font-semibold">Your Orders</h2>
            <ul class="mt-2">
                <li><a href="{{ route('user.orders') }}" class="text-blue-500">View your past orders</a></li>
            </ul>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-xl font-semibold">Profile Information</h2>
            <ul class="mt-2">
                <li><a href="{{ route('user.profile') }}" class="text-blue-500">View and edit your profile</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection