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

Route::get('/account/workshops', function () {
    return view('workshops');
});

Route::get('/search', [Controllers\SearchController::class, 'search']);

Route::get('/workshop/{id]',[Controllers\PagesController::class, 'workshop_page'])->name('workshop_page');

Auth::routes();

Route::post('/account/workshops', [Controllers\PagesController::class, 'add_workshop']);
Route::get('/account/workshops/new', [Controllers\PagesController::class, 'new_workshop']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
