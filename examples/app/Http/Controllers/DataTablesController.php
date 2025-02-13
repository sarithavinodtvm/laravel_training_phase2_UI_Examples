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
        return DataTables::of($districts)->make(true);
    }
}
