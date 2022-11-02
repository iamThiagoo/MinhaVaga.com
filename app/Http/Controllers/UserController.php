<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create(Request $request)
    {
        try {

            $data = $request->except('_token');
            dd($data); 

        } catch (Exception $e) {
            throw new Exception('Error: ' . $e->getMessage(), 1);
        }
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
