<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Workshops;
use App\Http\Controllers;

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

Route::get('/', function () {
    return view('home');
});


Route::get('/account', function () {
    return view('account');
});

Route::get('/account/workshops', [Controllers\PagesController::class, 'my_workshops']);

Route::get('/search', [Controllers\SearchController::class, 'search']);

Route::get('/workshop/{id}',[Controllers\PagesController::class, 'workshop_page']);
Route::get('/workshop/{id}/visits',[Controllers\PagesController::class, 'workshop_visits']);
Route::get('/account/visits',[Controllers\PagesController::class, 'customer_visits']);
Route::get('/workshop/{id}/appoint/{customer_id}',[Controllers\VisitController::class, 'new_visit']);
Route::get('/visit/{id}',[Controllers\VisitController::class, 'visit_page']);


Auth::routes();

Route::post('/account/workshops', [Controllers\PagesController::class, 'add_workshop']);
Route::get('/account/workshops/new', [Controllers\PagesController::class, 'new_workshop']);
Route::post('/visit/{id}/update',[Controllers\VisitController::class, 'update_visit']);
Route::post('/account', [Controllers\PagesController::class, 'add_customer']);
Route::post('/workshop/{id}', [Controllers\PagesController::class, 'add_customer']);
Route::get('/account/customer/new', [Controllers\PagesController::class, 'new_customer']);
Route::get('/account/customer/edit',  [Controllers\PagesController::class, 'update_customer']);
Route::get('/workshop/{id}/guest-visit', [Controllers\PagesController::class, 'new_customer']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
