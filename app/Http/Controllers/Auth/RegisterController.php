<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   
    public function register(){
        return view('auth.register');
       
    }

    public function register_post(Request $request){

        $request->validate([

            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password|min:8'
        ]);

        $registor_store = new User;
        $registor_store->name = $request->name;
        $registor_store->email = $request->email;
        $registor_store->password = Hash::make($request->password);
        $registor_store->save();
        return redirect()->route('register')->with('success','Your Registration Successfully Complete Please Login ');
    }
}
