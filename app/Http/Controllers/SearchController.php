<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshops;
use App\Models\Workshop_Types;

class SearchController extends Controller
{
    function search(Request $request)
    {
    $q = $request->input('q');
    $workshops = Workshops::join('addresses', 'addresses.id', '=', 'workshops.address_id')
            ->join('workshop_types','workshop_types.id','=','workshops.workshop_type_id')
            ->join('cities','cities.id','=','addresses.city_id')
            ->orWhere('cities.name', 'LIKE','%' .$q. '%')
            ->orWhere('workshop_types.name', 'LIKE','%' .$q. '%')
            ->orWhere('workshops.name', 'LIKE', '%' .$q. '%')
            ->select('workshops.id as WorkshopId','workshops.name as WorkshopName',
                    'workshops.rating as WorkshopRating','workshops.address_id',
                    'workshops.workshop_type_id')
            ->orderBy('workshops.name','asc')
            ->paginate(10);
        $workshops->appends(array('q'=>$q));
        return view('search', ['workshops'=>$workshops, 'q'=>$q, 'count'=>count($workshops)]);
    }
}
