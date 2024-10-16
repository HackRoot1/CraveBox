<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class RegisterController extends Controller
{

    // he example ch ahe na ho pn ata stor kute kracy;ch ahe check kraych na 
    // teh function chya aat decide hoil na kay karaych
    // hya function made itkya gosti ahet bgh nit hot smjtay ka? ho validatio n store chekc validatioh disopay error  redirect apge haeka function madhe ahet ho yatla kay kay tula use karta yeil prt teh bgh mg  valiation check hoil te and redirect page bas ha
    public function Store(Request $request)
    {

        // validations lavayla he 
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

        // validation fails zalyavar same page var redirect karayla ani sobt errors send karayla he
        if($validator->fails()) {
            // aata view made display karu errors tya sathi he ghayv lagel okkok
            return redirect()->route('register')->withErrors($validator); 
        }

        // itka code store karayla ahe fakt 
        $register = new User();
        $register->fname = $request->fname;
        $register->lname = $request->lname;
        $register->email = $request->email;
        $register->phone = $request->phone;
        $register->username = $request->username;
        $register->password = FacadesHash::make($request->password);
        $register->save();

        // redirect karayla ha
         return redirect()->route('login');
    }

    public function view(Request $req){
        $validator = FacadesValidator::make(
            $req->all(),
            [
                'username' => 'required|min:3',
                'password' => 'required|min:5',
            ]
        );
        if($validator->fails()) {
            return redirect()->route('login')->withErrors($validator); 
        }

        // 
        if(Auth::attempt(['username' => $req->username, 'password' => $req->password])) {
            return redirect()->route('home');
        }else {
            return redirect()->route('login');
        }


    }
}
