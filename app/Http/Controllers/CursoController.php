<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "bienvenido a la pagina principal";
 
    }
    public function create(){
        return "En esta pagina podras crear un curso";


    }
    public function show($curso){
        return "bienvenido al curso $curso";



    }
}
