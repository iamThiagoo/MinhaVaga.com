<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|max:150',
            'birthday'  => 'required|date|before: 14 years ago',
            'email'     => 'required|email|unique:users',
            'cpf'       => 'required|max:14|unique:users',
            'telefone'  => 'required|max:15',
            'estado'    => 'required|integer',
            'cidade'    => 'required|integer',
            'password'  => 'required',
        ]);

        $birthday = date("Y-m-d", strtotime($validated['birthday']));

        $user = User::create([
            'name'      => $validated['name'],
            'email'     => $validated['email'],
            'birthday'  => $birthday,
            'cpf'       => $validated['cpf'],
            'phone'     => $validated['telefone'],
            'password'  => bcrypt($validated['password']),
            'cidade_id' => $validated['cidade'],
            'estado_id' => $validated['estado'],
            'slug'      => Str::slug($validated['name'] . "-" . Str::random(10))
        ]);

        $user->save();

        Auth::login($user);
        return redirect(route('app.create.profile'));
    }

    public function delete(Request $request) {}

    public function edit(Request $request) {}
}
