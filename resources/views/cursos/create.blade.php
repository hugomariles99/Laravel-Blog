@extends('layouts.plantilla')

@section('title', 'Cursos Create')

@section('content')
    <h1>En esta pagina podras crear un curso.</h1>

    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf

        {{-- NAME --}}
        <div>
            <label>
                Nombre:
                <br>
                <input type="text" name="name" value="{{ old('name') }}">
            </label>

            @error('name')
                <br>
                <span>*{{ $message }}</span>
                <br>
            @enderror
        </div>

        {{-- DESCRIPCION --}}
        <div>
            <br>
            <label>
                Descripcion:
                <br>
                <textarea name="descripcion" rows="5">{{ old('descripcion') }}</textarea>
            </label>

            @error('descripcion')
                <br>
                <span>*{{ $message }}</span>
                <br>
            @enderror
        </div>

        {{-- CATEGORIA --}}
        <div>
            <br>
            <label>
                Categoria:
                <br>
                <input type="text" name="categoria" value="{{ old('categoria') }}">
            </label>

            @error('categoria')
                <br>
                <span>*{{ $message }}</span>
                <br>
            @enderror
        </div>


        <br>
        <button type="submit">
            Crear curso
        </button>
    </form>

@endsection
