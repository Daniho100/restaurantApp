<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get("/",[HomeController::class,"index"]);

Route::get("users",[AdminController::class,"user"]);

Route::get("delete/{id}",[AdminController::class,"delete"]);

Route::get("deletefood/{id}",[AdminController::class,"deletefood"]);

Route::get("updatefood/{id}",[AdminController::class,"updatefood"]);

Route::post("updatefoodchef/{id}",[AdminController::class,"updatefoodchef"]);

Route::post("update/{id}",[AdminController::class,"update"]);

Route::get("updatechef/{id}",[AdminController::class,"updatechef"]);

Route::get("deletechef/{id}",[AdminController::class,"deletechef"]);

Route::get("foodmenu",[AdminController::class,"foodmenu"]);

Route::post("uploadchef",[AdminController::class,"uploadchef"]);

Route::get("chefview",[AdminController::class,"chefview"]);

Route::post("reservation",[AdminController::class,"reservation"]);

Route::get("reservations",[AdminController::class,"reservations"]);

Route::post("uploadfood",[AdminController::class,"upload"]);

Route::get("orders",[AdminController::class,"orders"]);

Route::get("search",[AdminController::class,"search"]);

Route::post("uploadfood",[AdminController::class,"uploadchef"]);

Route::get("redirects",[HomeController::class,"redirects"]);

Route::post("addcart/{id}",[HomeController::class,"addcart"]);

Route::get("showcart/{id}",[HomeController::class,"showcart"]);

Route::get("remove/{id}",[HomeController::class,"remove"]);

Route::post("orderconfirm",[HomeController::class,"orderconfirm"]);