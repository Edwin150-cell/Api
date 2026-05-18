<?php

use App\Http\Controllers\api\librocontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/libros', [librocontroller::class, 'index']);
Route::post('/libros', [librocontroller::class, 'store']);
Route::get('/libros/{id}', [librocontroller::class, 'show']);
Route::put('/libros/{id}', [librocontroller::class, 'update']);
Route::delete('/libros/{id}', [librocontroller::class, 'destroy']);

