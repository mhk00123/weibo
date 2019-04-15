<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    //Login Auth
    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        //若Email && Password正確
        //attempt為laravel自帶的驗證功能
        if (Auth::attempt($credentials)) {
            session()->flash('success', 'Welcome Back!');
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            session()->flash('danger', 'Sorry, Your Eamil or Password is wrong.');
            return redirect()->back()->withInput();
        }
    }

    //Logout
    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功登出');
        return redirect('login');
    }

}
