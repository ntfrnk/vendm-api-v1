<?php

namespace App\Traits;

trait ApiResponser 
{
	public function success($data){
		return response()->json([
			'url' => request()->url(),
			'status' => 'success',
			'message' => $data['message'] ?? '',
			'data' => $data['data']
		], $data['code'] ?? 200);
	}

	public function successLogin($data){
		return response()->json([
			'url' => request()->url(),
			'status' => 'success',
			'message' => 'Sesión iniciada correctamente',
			'token' => $data['token'] ?? ''
		], $data['code'] ?? 200);
	}

	public function error($data){
		return response()->json([
			'url' => request()->url(),
			'status' => 'error',
			'message' => $data['message'] ?? '',
			'errors' => $data['errors'] ?? []
		], $data['code'] ?? 200);
	}

	public function errorValidation($data){
		return response()->json([
			'url' => request()->url(),
			'status' => 'error',
			'code' => $data['code'] ?? 422,
			'errors' => $data['error'] ?? []
		], $data['code'] ?? 422);
	}
}