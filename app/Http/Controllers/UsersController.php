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
        //---(1)驗證
        //validate -> Laravel自帶用於驗證的function
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        //---(2)建立數據庫資料
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        //---(3)成功後引導到個人資料頁面
        session()->flash('success', 'Welcome for your new journey');
        return redirect()->route('users.show', [$user]);
    }
}
