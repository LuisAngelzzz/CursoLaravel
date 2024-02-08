<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ContactanosController;
use  App\Http\Controllers\HomeController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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


    Route::get('/', HomeController::class)->name('home');

    Route::resource('cursos', CursoController::class);

    Route::view('nosotros', 'nosotros')->name('nosotros');

  //   Route::get('contactanos', function () {
  //       $correo = new ContactanosMailable;
  //       Mail::to('victor.aranaf92@gmail.com')->send($correo);
  //       return "Mensaje enviado.";
  // })->name('contactanos.index');

    route::get('contactanos', [ContactanosController::class, 'index']) 
        -> name ('contactanos.index');

    route::post( 'contactanos',[ContactanosController::class,'store'] )
         -> name ('contactanos.store') ;
    
  












    // Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

    // Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

    // route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

    // Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

    // Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');    

    // Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

    // Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

    