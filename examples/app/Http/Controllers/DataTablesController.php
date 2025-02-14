<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\District;
use DataTables;

class DataTablesController extends Controller
{
    public function getData()
    {
        $districts = District::all();
        return DataTables::of($districts)
        /*->addColumn('dist_name', function () {
            return '<a href="/users/'. $districts->dist_name .'">'. $districts->dist_name .'</a>';
        })
        ->rawColumns(['dist_name'])*/
        ->make(true);
    }
}
