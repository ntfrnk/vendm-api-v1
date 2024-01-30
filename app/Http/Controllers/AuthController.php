<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
	use ApiResponser;

	/**
	 * Registro de usuario
	 * 
	 * @param Illuminate\Http\Request $request
	 * @return Illuminate\Support\Facades\Response
	 */
	public function register(UserRequest $request) 
	{
		$user = User::create($request->validated());

		if($user){
			return $this->success([
				'message' => 'Usuario registrado correctamente',
				'token' => $user->createToken('API TOKEN')->plainTextToken
			]);
		}
	}


	/**
	 * Inicio de sesión de usuario
	 * 
	 * @param Illuminate\Http\Request $request
	 * @return Illuminate\Support\Facades\Response
	 */
	public function login(Request $request)
	{
		if(!Auth::attempt($request->only('email', 'password'))){
			return $this->errorValidation([
				'message' => 'Unauthorized',
				'code' => 401
			]);
		}

		$user = User::where('email', $request->email)->first();

		return $this->successLogin([
			'token' => $user->createToken('API TOKEN')->plainTextToken
		]);
	}


	/**
	 * Cierre de sesión de usuario
	 * 
	 * @param Illuminate\Http\Request $request
	 * @return Illuminate\Support\Facades\Response
	 */
	public function logout() {
		auth()->user()->tokens()->delete();
		return $this->success([
			'status' => 'success',
			'message' => 'Sesión eliminada correctamente',
		]);
	}
}