<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Workshops;
use App\Models\Workshop_Types;

class SearchController extends Controller
{
    function search(Request $request)
    {
    $q = $request->input('q');
    $workshops = Workshops::where('name', 'LIKE', '%' .$q. '%')/*=>with('workshop_type')DB::table('workshops')->select('workshops.id', 'workshops.name', 'cities.name')
            ->join('workshop_types','workshop_types.id','=','workshops.workshop_type_id')
            ->join('addresses', 'addresses.id', '=', 'workshops.address_id')->
            join('cities','cities.id','=','addresses.city_id')
            ->where(['workshops.name' => '%' .$q. '%'])
            ->orWhere(['cities.name' => '%' .$q. '%'])
            ->orWhere(['workshop_types.name' => '%' .$q. '%'])*/->get();
    //if(count($workshops)>0)
        return view('search', compact('workshops'));
    /*else
        return view('search')->withMessage('Brak wyników');*/
    }
}
