<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SidebarmenuController extends Controller
{
    function index() {
    	if(Auth::user()->role == "admin")
    		return view('home');
    	else
    		return view('regularuser');
    }
}
