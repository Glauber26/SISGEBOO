<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicialController extends Controller
{
	public function __construct(){
		$this->middleware('auth:policial');
	}


	public function index(){
		return view('policial');
	}
}
