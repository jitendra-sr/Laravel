<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function login (Request $req)
    {
        $req->validate([
            'user' => 'required|min:3',
            'password' => 'required|min:5|max:12'
        ]);

        $user = $req->input('user');
        $req->session()->put('user', $user); // Permanent session
        $req->session()->flash('msg', 'This is a flash message'); // Flash session

        return redirect('/profile');
    }
    function logout (Request $req)
    {
        $req->session()->pull('user'); // forget also works
        return redirect('/profile');
    }
}
