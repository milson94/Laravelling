<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/page1', function () {
    return view('view1'); 
});

Route::post('/create', [App\Http\Controllers\StudiesController::class, 'create'])->name('create');
Route::get('/mostra', [App\Http\Controllers\StudiesController::class, 'mostra']); 

Route::post('/index', [App\Http\Controllers\StudiesController::class, 'create'])->name('create');

Route::get('/inserir/{value}', function(){
    return 'inserindo'; 
});

Route::get('/apagar/{value}', function(){
    return 'apagando'; 
});

Route::get('/page2', function () {
    return view('view2'); 
});

