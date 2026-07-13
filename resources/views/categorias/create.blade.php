@extends('layouts.app')

@section('content')

    <h1>Nueva Categoría</h1>

    <div class="form-card">

        @if ($errors->any())
            <div class="form-errores">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf

            <div class="form-campo">
                <label for="Descripcion">Descripción</label>
                <input type="text" name="Descripcion" id="Descripcion" value="{{ old('Descripcion') }}">
            </div>

            <div class="form-acciones">
                <button type="submit" class="btn-nueva">Guardar</button>
                <a href="{{ route('categorias.index') }}">Cancelar</a>
            </div>
        </form>

    </div>

@endsection