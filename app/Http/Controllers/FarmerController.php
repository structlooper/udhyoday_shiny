<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmerController extends Controller
{
    function view()
    {
        return view('Farmdashboard');
    }
}
