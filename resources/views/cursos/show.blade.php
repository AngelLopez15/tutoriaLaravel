@extends('layouts.plantilla')
@section('title', 'Curso ' . $curso)
@section('content')
<h1>Hola, Mundo, y bienvenido al curso de: {{$curso}}</h1>
@endsection
