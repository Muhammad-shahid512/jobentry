<?php

use App\Http\Controllers\admin\employestrength;
use App\Http\Controllers\admin\OranizationTypesController;
use App\Http\Controllers\OrganizationtypeController;
use App\Models\organizationtype;
use Illuminate\Support\Facades\Route;

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



Route::resource('empstrength', employestrength::class);

Route::get("/create",[OranizationTypesController::class,"index"])->name('organization.create');
Route::post("/post",[OranizationTypesController::class,"postorganization"])->name('organization.post');
Route::get("/get",[OranizationTypesController::class,"getorganization"])->name('organization.get');
Route::get("/delete/org/{id}",[OranizationTypesController::class,"deleteorg"])->name('organization.delete');

