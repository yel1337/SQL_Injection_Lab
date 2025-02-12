<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/blind', function () {
	return view('blind');	
});

Route::match(['get', 'post'], '/blind_process', [PostController::class, 'blind_process']
);

Route::match(['get', 'post'], '/err', function () {
	return view('blsqli_form');
});

Route::match(['get', 'post'], '/process_err_based', [PostController::class, 'process_err_based']);


