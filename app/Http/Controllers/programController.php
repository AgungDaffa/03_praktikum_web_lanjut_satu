<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class programController extends Controller
{
    public function ping(){
        return view('program');
    }
}
