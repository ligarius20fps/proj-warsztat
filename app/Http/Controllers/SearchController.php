<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshops;
use App\Models\Workshop_Types;
use App\Models\City;

class SearchController extends Controller
{
    function search(Request $request)
    {
    $q = $request->input('q');
    if($q=="")
    {
        return redirect()->back();
    }
    $cities=City::all()->sortBy('name');
    $workshop_types= Workshop_Types::all()->sortBy('name');
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
        return view('search', ['workshops'=>$workshops, 'q'=>$q, 'count'=>count($workshops), 'cities'=>$cities,'workshop_types'=>$workshop_types]);
    }
    public function filter(String $q, Request $request)
    {
        $cities=City::all()->sortBy('name');
        $workshop_types= Workshop_Types::all()->sortBy('name');
        $workshops1 = Workshops::join('addresses', 'addresses.id', '=', 'workshops.address_id')
            ->join('workshop_types','workshop_types.id','=','workshops.workshop_type_id')
            ->join('cities','cities.id','=','addresses.city_id')
            ->where('workshops.name', 'LIKE', '%' .$q. '%')
            ->select('workshops.id as WorkshopId','workshops.name as WorkshopName',
                    'workshops.rating as WorkshopRating','workshops.address_id',
                    'workshops.workshop_type_id');
        if($request->filled('city') && $request->city!=0)
        {
            $workshops1->where('addresses.city_id', $request->city);
        }
        if($request->filled('street_name'))
        {
            $workshops1->where('addresses.street_name', 'like', '%'.$request->street_name.'%');
        }
        if($request->filled('workshop_type') && $request->workshop_type!=0)
        {
            $workshops1->where('workshops.workshop_type_id',$request->workshop_type);
        }
        if($request->filled('rating_from'))
        {
            $workshops1->where('workshops.rating','>=', $request->rating_from);
        }
        if($request->filled('rating_to'))
        {
            $workshops1->where('workshops.rating','<=', $request->rating_to);
        }
        switch ($request->sort_by)
        {
            case 2:
                $sort_by='workshops.name';
                $dir='desc';
                break;
            case 3:
                $sort_by='cities.name';
                $dir='asc';
                break;
            case 4:
                $sort_by='cities.name';
                $dir='desc';
                break;
            case 5:
                $sort_by='addresses.street_name';
                $dir='asc';
                break;
            case 6:
                $sort_by='addresses.street_name';
                $dir='desc';
                break;
            case 7:
                $sort_by='workshops.workshop_type_id';
                $dir='asc';
                break;
            case 8:
                $sort_by='workshops.rating';
                $dir='asc';
                break;
            case 9:
                $sort_by='workshops.rating';
                $dir='desc';
                break;
            default:
                $sort_by='workshops.name';
                $dir='asc';
        }
        //$workshops->get();
        /*if($dir=='asc')
        {
            $workshops->sortByAsc($sort_by)->paginate(10);
        }
        else
        {
            $workshops->sortByDesc($sort_by)->paginate(10);
        }*/
        $workshops=$workshops1->orderBy($sort_by, $dir)->paginate(10);
        $workshops->appends(array('q'=>$q, 'request'=>$request));
        return view('search', ['workshops'=>$workshops, 'q'=>$q, 'count'=>count($workshops), 'cities'=>$cities,'workshop_types'=>$workshop_types]);
    }
}
