<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LibroController;

Route::apiResource('libros', LibroController::class);