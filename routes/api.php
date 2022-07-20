<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [DataController::class, 'index']);
 
Route::get('area/{area}', [DataController::class, 'showByArea']);

Route::get('parameter/{parameter}', [DataController::class, 'showByParameterId']);

Route::post('/data', [DataController::class, 'destroy']);

Route::post('/data/new-data', [DataController::class, 'store']);

Route::post('/data/edit-data', [DataController::class, 'edit']);