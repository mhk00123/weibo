<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user) //<-傳入User模型
    {
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        //validate -> Laravel自帶用於驗證的function
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
    }
}
