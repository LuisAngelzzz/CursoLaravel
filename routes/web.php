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

route::get('cursos', [CursoController::class, 'index']);


route::get('cursos/create', [CursoController::class, 'create']);

route::get('cursos/{curso}', [CursoController::class, 'show']);


//     route::get('cursos/{curso}/{categoria}', function($curso, $categoria = null){

//         if($categoria){
//             return "bienvenido al curso: $curso, de la categoria $categoria";
//         }else{
//             return "bienvenido al curso: $curso";
//         }
        
//  });