<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PessoaLoginController extends Controller
{
    	public function __construct(){
		$this->middleware('guest:pessoa');
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

		$authOk = Auth::guard('pessoa')->attempt($credentials, $request->remember);


		if ($authOk) {
			return redirect()->intended(route('pessoa.dashboard'));
		}

		return redirect()->back()->withInputs($request->only('email','remember'));

	}

	public function index(){
		return view("auth.pessoa-login");
	}

}
