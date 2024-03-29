<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;


class CursoController extends Controller
{
    public function index(){
        
 
        $cursos = Curso::OrderBy('id', 'desc')->paginate();
    
        return view('cursos.index', compact('cursos'));

    }
    public function create(){
        return view('cursos.create');

    }



        public function store(StoreCurso $request){

            
            $curso = Curso::create($request->all());
	
	        return redirect()->route('cursos.show', $curso); //podemos pasar solo $curso
        
    }   
 
    public function show($curso){

        $curso = Curso::find($curso);

        return view('cursos.show', compact('curso'));

    }
    public function edit(Curso $curso) {
        return view('cursos.edit', compact('curso'));
    }
    public function update(Request $request, Curso $curso) {

        $request->validate([

            'name' =>  'required|min:3|max:150',
            'descripcion' => 'required',
            'categoria' =>  'required'

        ]);

        $curso->name = $request->name;
        $curso->descripcion= $request->descripcion;
        $curso->categoria= $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    
    }    

    
    public function destroy(Curso $curso) {
        $curso->delete();
        return redirect()->route('cursos.index');
  }

}
