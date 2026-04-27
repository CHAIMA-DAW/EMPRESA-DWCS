<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="text-lg font-semibold mb-4">Productos disponibles</h3>

                    @if($products->count() > 0)
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b bg-gray-100">
                                    <th class="p-2 font-semibold">Nombre</th>
                                    <th class="p-2 font-semibold">Precio</th>
                                    <th class="p-2 font-semibold">Stock</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($products as $product)
                                    <tr class="border-b hover:bg-gray-50">
                                        <td class="p-2">{{ $product->nombre }}</td>
                                        <td class="p-2">{{ number_format($product->precio, 2) }} €</td>
                                        <td class="p-2">{{ $product->stock }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="mt-4">
                            {{ $products->links() }}
                        </div>
                    @else
                        <p class="text-gray-600">No hay productos disponibles.</p>
                    @endif

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
