<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PolicialLoginController extends Controller
{
	public function __construct(){
		$this->middleware('guest:policial');
	}


	public function login(Request $request){

		$request->validate([
			'email' => 'required|string',
			'password' => 'required|string',
		]);


		$credentials = [
			'email' => $request->email,
			'password' => $request->password
		];

		$authOk = Auth::guard('policial')->attempt($credentials, $request->remember);


		if ($authOk) {
			return redirect()->intended(route('policial.dashboard'));
		}

		return redirect()->back()->withInputs($request->only('email','remember'));

	}

	public function index(){
		return view("auth.policial-login");
	}

}
