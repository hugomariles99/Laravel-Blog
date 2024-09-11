@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso)

@section('content')
    <h1>Bienvenios al curso: {{ $curso }}.</h1>
@endsection
