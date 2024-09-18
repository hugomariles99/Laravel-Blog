@extends('layouts.plantilla')

@section('title', 'Cursos Edit')

@section('content')
    <h1>En esta pagina podras editar un curso.</h1>

    <form action="{{ route('cursos.update', $curso) }}" method="POST">

        @csrf

        @method('put')

        {{-- NAME --}}
        <div>
            <label>
                Nombre:
                <br>
                <input type="text" name="name" value="{{ old('name', $curso->name) }}">
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
                <textarea name="descripcion" rows="5">{{ old('descripcion', $curso->descripcion) }}</textarea>
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
                <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
            </label>

            @error('categoria')
                <br>
                <span>*{{ $message }}</span>
                <br>
            @enderror
        </div>

        <br>
        <button type="submit">
            Editar curso
        </button>
    </form>

@endsection
