<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;

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

Route::get('/', [CompanyController::class, "index"]);

Route::get("/company/create", [CompanyController::class, "create"]);

Route::post("/companies", [CompanyController::class, "store"]);

Route::get("/companies/{company}/edit", [CompanyController::class, "edit"]);

Route::put('/companies/{company}', [CompanyController::class, "update"]);

Route::delete('/companies/{company}', [CompanyController::class, "destroy"]);

Route::get("/company/{company}", [CompanyController::class, "show"]);


Route::get("/register", [UserController::class, "create"]);

Route::post("/users", [UserController::class, "store"]);