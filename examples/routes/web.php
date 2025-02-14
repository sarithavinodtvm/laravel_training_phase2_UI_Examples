<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataTablesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('loadDataTablePage', function () {
    return view('dataTable');
});
Route::get('data-tables-data', [DataTablesController::class,'getData']);

