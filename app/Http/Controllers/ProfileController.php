<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile(Request $Request)
    {
        $user_data = User::find(Auth::user()->id);
        return view('profile', ['user_data' => $user_data]);
    }
}
