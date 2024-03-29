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
Route::get('/search/{q}/filter', [Controllers\SearchController::class, 'filter']);

Route::get('/workshop/{id}',[Controllers\PagesController::class, 'workshop_page']);
Route::get('/workshop/{id}/visits',[Controllers\PagesController::class, 'workshop_visits']);
Route::get('/account/visits',[Controllers\PagesController::class, 'customer_visits']);
Route::get('/workshop/{id}/appoint/{customer_id}/{service_type_id}',[Controllers\VisitController::class, 'new_visit']);
Route::get('/visit/{id}',[Controllers\VisitController::class, 'visit_page']);


Auth::routes();

Route::post('/account/workshops', [Controllers\PagesController::class, 'add_workshop']);
Route::get('/account/workshops/new', [Controllers\PagesController::class, 'new_workshop']);
Route::get('/account/workshops/{id}/edit', [Controllers\PagesController::class, 'update_workshop']);
Route::post('/visit/{id}/update',[Controllers\VisitController::class, 'update_visit']);
Route::post('/account', [Controllers\PagesController::class, 'add_customer']);
Route::post('/workshop/{id}/{service_type_id}', [Controllers\PagesController::class, 'add_customer']);
Route::get('/account/customer/new', [Controllers\PagesController::class, 'new_customer']);
Route::get('/account/customer/edit',  [Controllers\PagesController::class, 'update_customer']);
Route::get('/workshop/{id}/guest-visit/{service_type_id}', [Controllers\PagesController::class, 'new_customer']);
Route::get('/visit/{id}/review', [Controllers\VisitController::class, 'new_review']);
Route::get('/visit/{id}/reschedule', [Controllers\VisitController::class, 'request_date_change']);
Route::post('/visit/{id}', [Controllers\VisitController::class, 'add_review']);
Route::get('/account/workshops/{id}/price-list', [Controllers\PagesController::class, 'price_list']);
Route::get('/account/workshops/{id}/price-list/create', [Controllers\PagesController::class, 'create_price_list']);
Route::post('/account/workshops/{id}/price-list/add', [Controllers\PagesController::class, 'new_price']);
Route::get('/price/{id}/remove', [Controllers\PagesController::class, 'remove_price']);
Route::get('/account/notifications',[Controllers\PagesController::class, 'notifications'] );
Route::get('/visit/{id}/reject',[Controllers\VisitController::class, 'reject_visit'] );
Route::get('/visit/{id}/accept',[Controllers\VisitController::class, 'accept_visit'] );
Route::get('/notification/{notif_id}/visit/{visit_id}/more',[Controllers\VisitController::class, 'notification_clicked'] );
Route::get('/notification/{notif_id}/workshop/{workshop_id}/more',[Controllers\AdminController::class, 'notification_clicked'] );
Route::get('/workshop/{id}/remove', [Controllers\AdminController::class, 'remove_workshop']);
Route::get('/db-edit', [Controllers\AdminController::class, 'db_edit']);
Route::get('/db-edit/{num}', [Controllers\AdminController::class, 'db_edit_table']);
Route::post('/city/add', [Controllers\AdminController::class, 'add_city']);
Route::post('/workshop_type/add', [Controllers\AdminController::class, 'add_workshop_type']);
Route::post('/service_type/add', [Controllers\AdminController::class, 'add_service_type']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');