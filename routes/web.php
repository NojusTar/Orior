<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;

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

// company 
Route::get('/', [CompanyController::class, "index"]);

Route::get("/company/create", [CompanyController::class, "create"]);

Route::post("/companies", [CompanyController::class, "store"]);

Route::get("/companies/{company}/edit", [CompanyController::class, "edit"]);

Route::put('/companies/{company}', [CompanyController::class, "update"]);

Route::delete('/companies/{company}', [CompanyController::class, "destroy"]);

Route::get("/company/{company}", [CompanyController::class, "show"]);

// product
Route::get("/product/1", [ProductController::class, "show"]);

// user
Route::get("/user/1", [UserController::class, "show"]);