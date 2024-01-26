<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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


 Route::get('/', HomeController::class);


   

Route::controller(CursoController::class)->group(function () {

    route::get('cursos', 'index');
    route::get('cursos/create', 'create');
    route::get('cursos/{curso}', 'show');
});
