<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutomotiveController extends Controller
{
    public function index()
    {
        return view('automotive.index');
    }
}
