<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => 'Connection OK'
        ], 200);
    }
}
