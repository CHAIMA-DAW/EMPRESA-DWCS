<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Crear Producto
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow">

            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block font-medium">Nombre</label>
                    <input type="text" name="nombre" class="w-full border rounded p-2"
                           value="{{ old('nombre') }}" required>
                </div>

                <div class="mb-4">
                    <label class="block font-medium">Descripción</label>
                    <textarea name="descripcion" class="w-full border rounded p-2">{{ old('descripcion') }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="block font-medium">Precio (€)</label>
                    <input type="number" step="0.01" name="precio" class="w-full border rounded p-2"
                           value="{{ old('precio') }}" required>
                </div>

                <div class="mb-4">
                    <label class="block font-medium">Stock</label>
                    <input type="number" name="stock" class="w-full border rounded p-2"
                           value="{{ old('stock') }}" required>
                </div>

                <button class="bg-blue-600 text-white px-4 py-2 rounded">
                    Guardar
                </button>

                <a href="{{ route('products.index') }}" class="ml-3 text-gray-600">
                    Cancelar
                </a>
            </form>

        </div>
    </div>
</x-app-layout>
