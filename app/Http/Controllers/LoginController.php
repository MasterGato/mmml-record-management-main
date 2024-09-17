<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('loginpage.index');
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);



        $user = Employee::where('username', $request->username)->first();

        if($user){
            if($user->password == $request->password){
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->withInput(
            $request->only('username')
        );
    }
}
