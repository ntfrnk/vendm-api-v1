<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
	/**
	 * Corrobora que la sesión del usuario está activa
	 * 
	 * @return Illuminate\Support\Facades\Response
	 */
	public function session()
	{
		return response()->json([
			'status' => 'success',
			'message' => 'Ya estás logueado'
		], 200);
	}
}