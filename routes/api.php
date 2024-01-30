<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;








Route::get('/', [UserController::class, 'index']);

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth:sanctum'])->group(function(){
	Route::get('/test/session', [TestController::class, 'session']);
	
	// Listado de items (búsqueda | categoría | subcategoría | filtros varios)
	// Item (Detalle de un ítem)
	// Listado de tiendas
	// Detalle de tienda
	// Listado de items por tienda

	/**
	 * Data
	 * ******************************************
	 */
	Route::controller(DataController::class)
	->prefix('data')
	->as('data.')
	->group(function () {

		Route::get('/provinces', 'provinces')->name('provinces');
		Route::get('/cities/{province}', 'citiesByProvince')->name('cities');
		Route::get('/categories', 'categories')->name('categories');
		Route::get('/subcategories/{category}', 'subcategoriesByCategory')->name('subcategories');
		
	});

	/**
	 * Info de una tienda
	 * ******************************************
	 */
	Route::controller(StoreController::class)
	->prefix('stores')
	->as('stores.')
	->group(function () {

		Route::get('/{store}', 'show')->name('show');
		
	});

	/**
	 * Cuenta de usuario
	 * ******************************************
	 */
	Route::controller(AccountController::class)
	->prefix('account')
	->as('account.')
	->group(function () {

		Route::get('/profile', 'profile')->name('profile');
		
	});

	Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});