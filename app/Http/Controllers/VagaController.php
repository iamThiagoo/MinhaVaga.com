<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VagaController extends Controller
{
    public function index($slug){
        return view('home');
    }
}
