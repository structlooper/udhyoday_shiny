<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class translatedController extends Controller
{
    function view()
    {
        return view('Translated.home');
    }
}
