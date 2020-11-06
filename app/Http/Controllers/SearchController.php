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
    $workshops = Workshops::where('name', 'LIKE', '%' .$q. '%')->orderBy('name','asc')/*
            ->join('workshop_types','workshop_types.id','=','workshops.workshop_type_id')
            ->join('addresses', 'addresses.id', '=', 'workshops.address_id')->
            join('cities','cities.id','=','addresses.city_id')
            ->where(['workshops.name' => '%' .$q. '%'])
            ->orWhere(['cities.name' => '%' .$q. '%'])
            ->orWhere(['workshop_types.name' => '%' .$q. '%'])*/->paginate(10);
    //if(count($workshops)>0)
        $workshops->appends(array('q'=>$q));
        return view('search', ['workshops'=>$workshops, 'q'=>$q, 'count'=>count($workshops)]);
    /*else
        return view('search')->withMessage('Brak wyników');*/
    }
}
