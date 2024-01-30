<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    use ApiResponser;
    /**
     * Comment
     * 
     * @param type $varname
     * @return type
     */
    public function profile()
    {
        $load = explode(',', request()->load);
        $hide = explode(',', request()->hide);
        
        $loggedUser = auth()->user()->load($load)->makeHidden($hide);

        dd($loggedUser->toSql());
        
        return $this->success([
            'data' => $loggedUser
        ]);
    }
}
