<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile(Request $Request){
        // select * from users
        // select * from users where id = Auth:id()
        // where condition nit bgh kashi lagte teh ho ha 
        $user_data = User::find(Auth::user()->id);
        // $user_data= DB::table('users')->where('id', '=', Auth::id())->get();
        // dd($user_data); wait bghto mi jara ha ahe me baghte
        // print_r($user_data);
        // exit();
        return view('profile',['user_data' => $user_data]); 
    }
}
