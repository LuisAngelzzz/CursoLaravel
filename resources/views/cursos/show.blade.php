@extends('layouts.plantilla')

@section('title', 'Curso' . $curso->name)

@section('content')
         <h1>bienvenido al curso {{$curso->name}}</h1>
         <a href="{{Route('cursos.index')}}">Volver a cursos</a>
         <p><strong>Categoria:  </strong>{{$curso->categoria}}</p>
         <p>{{$curso->descripcion}}</p>
@endsection
