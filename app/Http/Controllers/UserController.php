<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        User::create([
            'name' => '森本',
            'email' => 'morimoto@tech.com',
            'password' => Hash::make("pass"),
       ]);

        return redirect('/users'); // ユーザー一覧ページへリダイレクト
    }
}
