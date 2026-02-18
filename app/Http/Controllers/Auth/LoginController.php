<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }
    public function login(LoginRequest $request){

        if(Auth::attempt(['email' => $request->validated()['email'], 'password' => $request->validated()['password']])){
            $request->session()->regenerate();
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
//        $request->validated();
//
//        $credentials = $request->only([$request->validated()['email'], $request->validated()['password']]);
//        if (auth()->attempt($credentials)) {
//            return redirect()->route('home');
//        } else {
//            return "404";
//        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
