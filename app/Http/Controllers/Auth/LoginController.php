<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $logged = Auth::attempt($validated);

        if($logged) {
            return redirect()->intended('/');
        } else {
            return back()->with('Usuário ou Senha inválidos!');
        }
    }
}
