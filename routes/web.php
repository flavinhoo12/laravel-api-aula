<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
       'message' => 'OK', 
    ]);
});

Route::get('/somar', function(Request $request){
    $soma = array_sum($request->all());
    return response()->json([
        'message' => 'OK', //opcional mas recomendável
        'sum' => $soma,
    ]);
});

Route::prefix('/people')->group(function(){
    Route::get('/list', [PeopleController::class, 'list']);

    Route::post('/store', [PeopleController::class, 'store']);
});