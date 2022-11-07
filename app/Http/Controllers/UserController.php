<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|max:150',
            'birthday' => 'required|date',
            'email'    => 'required|email',
            'cpf'      => 'required|max:14',
            'telefone' => 'required|max:15',
            'password' => 'required'
        ]);

        $slug = Str::slug($validated['name'] . "-" . Str::random(10));

        $user = User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'birthday' => $validated['birthday'],
            'cpf'      => $validated['cpf'],
            'phone'    => $validated['telefone'],
            'password' => $validated['password'],
            'slug'     => $slug
        ]);

        $user->save();

    }

    public function login(Request $request) {}

    public function delete(Request $request) {}

    public function edit(Request $request) {}
}
