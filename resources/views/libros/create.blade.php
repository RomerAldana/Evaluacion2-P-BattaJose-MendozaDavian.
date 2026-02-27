@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto">
    <h2 class="text-2xl font-bold mb-6">Registrar Nuevo Libro</h2>

    <form action="{{ route('libros.store') }}" method="POST" class="bg-white rounded shadow p-6">
        @csrf

        <div class="mb-4">
            <label for="titulo" class="block text-gray-700 text-sm font-bold mb-2">Título * (mínimo 5 caracteres)</label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}"
                class="w-full px-3 py-2 border rounded @error('titulo') border-red-500 @enderror">
            @error('titulo')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="isbn" class="block text-gray-700 text-sm font-bold mb-2">ISBN * (único)</label>
            <input type="text" name="isbn" id="isbn" value="{{ old('isbn') }}"
                class="w-full px-3 py-2 border rounded @error('isbn') border-red-500 @enderror">
            @error('isbn')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="paginas" class="block text-gray-700 text-sm font-bold mb-2">Número de Páginas *</label>
            <input type="number" name="paginas" id="paginas" value="{{ old('paginas') }}"
                class="w-full px-3 py-2 border rounded @error('paginas') border-red-500 @enderror">
            @error('paginas')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="autor_id" class="block text-gray-700 text-sm font-bold mb-2">Autor *</label>
            <select name="autor_id" id="autor_id"
                class="w-full px-3 py-2 border rounded @error('autor_id') border-red-500 @enderror">
                <option value="">Seleccione un autor</option>
                @foreach($autores as $autor)
                    <option value="{{ $autor->id }}" {{ old('autor_id') == $autor->id ? 'selected' : '' }}>
                        {{ $autor->nombre }}
                    </option>
                @endforeach
            </select>
            @error('autor_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end space-x-2">
            <a href="{{ route('libros.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                Cancelar
            </a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Guardar
            </button>
        </div>
    </form>
</div>
@endsection