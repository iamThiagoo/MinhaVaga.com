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
            'name'      => 'required|max:150',
            'birthday'  => 'required|date',
            'email'     => 'required|email',
            'cpf'       => 'required|max:14',
            'telefone'  => 'required|max:15',
            'estado'    => 'required|integer',
            'cidade'    => 'required|integer',
            'password'  => 'required',
        ]);

        $slug     = Str::slug($validated['name'] . "-" . Str::random(10));
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
            'slug'      => $slug
        ]);

        $user->save();

        redirect( route("app.create-profile") );
    }

    public function createProfile() {
        return view("profile.first-profile");
    }

    public function login(Request $request) {}

    public function delete(Request $request) {}

    public function edit(Request $request) {}
}
