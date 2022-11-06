<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'nome'     => 'required|max:150',
            'birthday' => 'required|date',
            'email'    => 'required|email',
            'cpf'      => 'required|max:14',
            'telefone' => 'required|max:15',
            'password' => 'required'
        ]);

        dd($validated);

    }

    public function login(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }

    public function edit(Request $request)
    {

    }
}
