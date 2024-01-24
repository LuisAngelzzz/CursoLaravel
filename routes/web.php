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

Route::get('/', function () {
    // return view('welcome');
    return "bievendio a la pagina principal";
});

route::get('cursos', function(){

return "bienvenido a la pagina cursos";

});

//curso/create

route::get('cursos/create', function() {

    return "En esta pagina podras crear un curso";

});

// route::get('cursos/{curso}', function($curso){

//     return "bienvenido al curso: $curso";
    
//  });

    route::get('cursos/{curso}/{categoria}', function($curso, $categoria = null){

        if($categoria){
            return "bienvenido al curso: $curso, de la categoria $categoria";
        }else{
            return "bienvenido al curso: $curso";
        }
        
 });