<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

Route::get('/post/create',[postController::class,"create"]);
Route::get('/post/read/{id}', [postController::class, "read"]);
Route::get('/post/readAll', [postController::class, "readAll"]);
Route::get('/post/update', [postController::class, 'update']);
Route::get('/post/delete', [postController::class, 'delete']);
Route::get('/', function () {
    return view('welcome');
});
