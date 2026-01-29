@extends('layouts.app')

@section('content')
<div class="settings-container">
    <h1 class="text-2xl font-bold mb-4">Account Settings</h1>
    <form action="{{ route('user.settings.update') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
            <input type="password" id="password" name="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="notifications" class="block text-sm font-medium text-gray-700">Notification Preferences</label>
            <select id="notifications" name="notifications" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                <option value="all">All Notifications</option>
                <option value="important">Only Important Notifications</option>
                <option value="none">No Notifications</option>
            </select>
        </div>

        <button type="submit" class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded">Save Changes</button>
    </form>
</div>
@endsection