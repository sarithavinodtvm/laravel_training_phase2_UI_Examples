<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('loadDataTablePage', function () {
    return view('dataTable');
});
Route::get('data-tables-data', [DataTablesController::class,'getData'])->name('loadDataTable');

