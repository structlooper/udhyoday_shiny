<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexContrller extends Controller
{
    function index(){
      return view('index');
    }
    function farms(){
      return view('farms');
    }
}
