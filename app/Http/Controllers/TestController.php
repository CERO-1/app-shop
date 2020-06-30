<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // definimos metodos
    public function welcome(){
   
    	return view('welcome');
    }
}
