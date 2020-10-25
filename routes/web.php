<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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

Route::any('/search', function(Request $request){
    $q = $request->input('q');
    $workshop = DB::table('workshops')->select('workshops.id', 'workshops.name', 'cities.name')
            /*->join('workshop_types','workshop_types.id','=','workshops.workshop_type_id')*/
            ->join('addresses', 'addresses.id', '=', 'workshops.address_id')->
            join('cities','cities.id','=','addresses.city_id')
            ->where(['workshops.name' => '%' .$q. '%'])
            ->orWhere(['cities.name' => '%' .$q. '%'])
            /*->orWhere(['workshop_types.name' => '%' .$q. '%'])*/->get();
    if(count($workshop)>0)
        return view('search')->withDetails($workshop)->withQuery($q);
    else
        return view('search')->withMessage('Brak wyników');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
