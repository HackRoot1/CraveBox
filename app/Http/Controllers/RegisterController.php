<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class RegisterController extends Controller
{

    public function Store(Request $request)
    {
        $validator = FacadesValidator::make(
            $request->all(),
            [
                'fname' => 'required|min:3',
                'lname' => 'required|min:3',
                'email' => 'required|email|unique:users',
                'phone' => 'required|digits:10',
                'username' => 'required|min:3',
                'password' => 'required|confirmed|min:5',
                'password_confirmation' => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator);
        }

        $register = new User();
        $register->fname = $request->fname;
        $register->lname = $request->lname;
        $register->email = $request->email;
        $register->phone = $request->phone;
        $register->username = $request->username;
        $register->password = FacadesHash::make($request->password);
        $register->save();

        return redirect()->route('login');
    }

    public function authenticate(Request $req)
    {
        $validator = FacadesValidator::make(
            $req->all(),
            [
                'username' => 'required|min:3',
                'password' => 'required|min:5',
            ]
        );

        if ($validator->fails()) {
            return redirect()->route('login')->withErrors($validator);
        }

        if (Auth::attempt(['username' => $req->username, 'password' => $req->password])) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('error', 'Either email/password is incorrect.');
        }
        
    }
}
