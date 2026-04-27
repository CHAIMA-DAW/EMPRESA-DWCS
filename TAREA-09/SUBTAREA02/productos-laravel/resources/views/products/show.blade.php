<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Detalles del Producto
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow">

            <h3 class="text-2xl font-bold mb-4">{{ $product->nombre }}</h3>

            <p><strong>Descripción:</strong> {{ $product->descripcion }}</p>
            <p class="mt-2"><strong>Precio:</strong> {{ $product->precio }} €</p>
            <p class="mt-2"><strong>Stock:</strong> {{ $product->stock }}</p>

            <div class="mt-6">
                <a href="{{ route('products.index') }}" class="text-blue-600">
                    Volver al listado
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
