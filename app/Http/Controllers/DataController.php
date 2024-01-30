<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Province;
use App\Models\Subcategory;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class DataController extends Controller
{
    use ApiResponser;

    /**
     * Get all the provinces
     * 
     * @return \Illuminate\Http\Response JSON
     */
    public function provinces()
    {
        $key = 'data.provinces';

        $provinces = Cache::rememberForever($key, function () {
            return Province::all();
        });

        return $this->success([
            'data' => $provinces
        ]);
    }

    /**
     * Get all the cities
     * 
     * @param App\Models\Province $province
     * @return \Illuminate\Http\Response JSON
     */
    public function citiesByProvince(Province $province)
    {
        $key = 'data.cities.' . $province->id;
        
        $cities = Cache::rememberForever($key, function () use ($province) {
            return City::where('province_id', $province->id)->orderBy('name')->get();
        });

        return $this->success([
            'data' => $cities
        ]);
    }

    /**
     * Get all the categories
     * 
     * @return \Illuminate\Http\Response JSON
     */
    public function categories()
    {
        $key = 'data.categories';

        $categories = Cache::rememberForever($key, function () {
            return Category::all();
        });

        return $this->success([
            'data' => $categories
        ]);
    }

    /**
     * Get all the cities
     * 
     * @param App\Models\Category $category
     * @return \Illuminate\Http\Response JSON
     */
    public function subcategoriesByCategory(Category $category)
    {
        $key = 'data.subcategories.' . $category->id;
        
        $subcategories = Cache::rememberForever($key, function () use ($category) {
            return Subcategory::where('category_id', $category->id)->orderBy('name')->get();
        });

        return $this->success([
            'data' => $subcategories
        ]);
    }
}
