<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', [DemoController::class, 'index']);
Route::get('/create', [DemoController::class, 'create']);
Route::post('/create', [DemoController::class, 'store']);
Route::get('/cloths/{id}', [DemoController::class, 'show']);
Route::put('/update/{id}', [DemoController::class, 'update']);
Route::delete('/cloths/{id}', [DemoController::class, 'destroy']);






// Route::get('/',function(){
// return view('welcome');
// });
