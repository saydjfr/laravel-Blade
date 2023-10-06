<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;




Route::get('/table', function () {
    return view('Table');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datatable', function () {
    return view('datatables');

});

Route::get('/cast',[CastController::class,'index']);

Route::get('/cast/create', [CastController::class, 'create']);

Route::post('/cast', [CastController::class, 'store']);

Route::get('/cast/{id}', [CastController::class, 'show']);

Route::get('/cast/update/{id}', [CastController::class, 'edit']);

Route::post('/cast/update/{id}', [CastController::class, 'update']);

Route::get('/cast/delete/{id}', [CastController::class, 'destroy']);
