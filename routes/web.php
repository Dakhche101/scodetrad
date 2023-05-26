<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StripepayementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[Homecontroller::class,'redirect'])->name('redirect');
Route::get('/redirect/card',[CartController::class,'index'])->name('card');
Route::get('/redirect/productinfo/{id}',[UserController::class,'productinfo'])->name('productinfo');

Route::get('/product',[Homecontroller::class,'product'])->name('addproduct');
Route::post('/addproduct',[Homecontroller::class,'add']);
Route::post('/redirect/addcart/{id}',[CartController::class,'add']);
Route::get('/redirect/remove/{id}',[CartController::class,'remove']);
Route::post('/redirect/card/comande',[CartController::class,'add']);
Route::get('/redirect/card/comande',[CartController::class,'comande']);
Route::get('/redirect/card/comander',[CartController::class,'comander'])->name('comander');
Route::get('redirect/comandes',[Homecontroller::class,'showcomande'])->name('comandes');
Route::get('redirect/edit/{id}',[Homecontroller::class,'editproduct'])->name('editproduct');
Route::get('redirect/update/{id}',[Homecontroller::class,'updatproduct'])->name('updatproduct');
Route::get('redirect/delete/{id}',[Homecontroller::class,'deleteproduct'])->name('deleteproduct');
Route::get('redirect/comandes/affecter/{id}',[Homecontroller::class,'affecter']);
Route::get('redirect/comandes/save/{comande}/{livreur}',[Homecontroller::class,'saveaffecter'])->name('hz');
Route::get('redirect/livreur',[Homecontroller::class,'livreur']);




// aws carosrelle