@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-2xl font-bold mb-4">Your Orders</h1>
    
    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="min-w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 text-left">Order ID</th>
                    <th class="py-2 px-4 text-left">Date</th>
                    <th class="py-2 px-4 text-left">Status</th>
                    <th class="py-2 px-4 text-left">Total</th>
                    <th class="py-2 px-4 text-left">Details</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example order row -->
                <tr>
                    <td class="py-2 px-4">#12345</td>
                    <td class="py-2 px-4">2023-10-01</td>
                    <td class="py-2 px-4">Shipped</td>
                    <td class="py-2 px-4">$99.99</td>
                    <td class="py-2 px-4">
                        <a href="#" class="text-blue-500 hover:underline">View Details</a>
                    </td>
                </tr>
                <!-- Repeat for more orders -->
            </tbody>
        </table>
    </div>
</div>
@endsection