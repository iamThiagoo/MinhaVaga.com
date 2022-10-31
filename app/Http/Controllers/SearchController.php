<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function index(){

        var_dump($_POST['search-banner']);

    }

}
