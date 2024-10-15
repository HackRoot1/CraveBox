<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class RegisterController extends Controller
{

    public function Store(Request $request)
    {

        // ithe pn kahitari answer return zala asel he rules ahet teh ho smajla teh gaahaa jala bgh hoo ata bar vatla jara haa ata push kar 3 commands ahet mg mala pn bhetel code ok hali click kr ke
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

        if($validator->fails()) {
            // aata view made display karu errors tya sathi he ghayv lagel okkok
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

        // ata correct details submit kelya tar mg redirect karaych dashboard kiva home page var nahi login registration varun direct pn chalt nanshi sign krel mg login la username pass m to dashboard la signup login home page la asel haa thikke mg tas kar login la redirect kar example ahe yach page var ho  ata redirect kru mala xopaych ho titka kar bagh jail kankki? nahi mahit spelling mistake route la name nahiye ata jail  bhar fomr keypad ahi chalt
         return redirect()->route('login');
    }
}
