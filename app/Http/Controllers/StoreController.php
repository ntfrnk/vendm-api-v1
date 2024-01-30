<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Get all the stores
     * 
     * @param type $varname
     * @return type
     */
    public function index()
    {
        //
    }
    
    /**
     * Get eht info of an single store
     * 
     * @param App\Models\Store $store
     * @return type
     */
    public function show(Store $store)
    {
        if(!is_null(request()->load)){
            $store = $store->load(explode(',', request()->load));
        }
        return response()->json($store);
    }
}
