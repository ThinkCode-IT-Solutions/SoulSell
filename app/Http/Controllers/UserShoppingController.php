<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserShoppingController extends Controller
{
    public function dashboard()
    {
        $data["orders"] = Auth::user()->orders;
        return view("user.dashboard", )->with($data);
    }


}
