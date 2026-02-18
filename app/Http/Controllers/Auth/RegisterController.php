<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }
    public function register(RegisterRequest $request){
//        dd($request->validated());
        try{
            User::create([
                ...$request->validated(),
                'password' => bcrypt($request->validated()['password'])
            ]);

            return redirect()->route('login');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }


    }
}
