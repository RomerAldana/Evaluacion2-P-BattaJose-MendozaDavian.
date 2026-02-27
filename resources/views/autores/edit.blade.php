@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto">
    <h2 class="text-2xl font-bold mb-6">Editar Autor</h2>

    <form action="{{ route('autores.update', $autor->id) }}" method="POST" class="bg-white rounded shadow p-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre *</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $autor->nombre) }}"
                class="w-full px-3 py-2 border rounded @error('nombre') border-red-500 @enderror">
            @error('nombre')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="nacionalidad" class="block text-gray-700 text-sm font-bold mb-2">Nacionalidad</label>
            <input type="text" name="nacionalidad" id="nacionalidad" value="{{ old('nacionalidad', $autor->nacionalidad) }}"
                class="w-full px-3 py-2 border rounded @error('nacionalidad') border-red-500 @enderror">
            @error('nacionalidad')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="fecha_nacimiento" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Nacimiento</label>
            @php
                // Manejar la fecha correctamente
                $fechaValue = '';
                if ($autor->fecha_nacimiento) {
                    if (is_string($autor->fecha_nacimiento)) {
                        $fechaValue = date('Y-m-d', strtotime($autor->fecha_nacimiento));
                    } else {
                        $fechaValue = $autor->fecha_nacimiento->format('Y-m-d');
                    }
                }
            @endphp
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" 
                   value="{{ old('fecha_nacimiento', $fechaValue) }}"
                   class="w-full px-3 py-2 border rounded @error('fecha_nacimiento') border-red-500 @enderror">
            @error('fecha_nacimiento')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end space-x-2">
            <a href="{{ route('autores.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                Cancelar
            </a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Actualizar
            </button>
        </div>
    </form>
</div>
@endsection