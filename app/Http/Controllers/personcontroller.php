<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\person;

class personcontroller extends Controller
{
    public function index()
    {
        $wow = person::all();
        return view('home',['wow' => $wow]);
    }
}
