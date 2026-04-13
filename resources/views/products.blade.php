<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-2 mb-6">
                <a href="{{ route('dashboard') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Dashboard</a>
                <a href="{{ route('addProduct') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-indigo-600 text-white">Add Product</a>
                <a href="{{ route('supplier') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Supplier</a>
                <a href="{{ route('stock') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Stock</a>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Product List</h3>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">ID</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">Name</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">Description</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">Price</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">Quantity</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse(($products ?? []) as $product)
                                    <tr>
                                        <td class="px-4 py-3">{{ $product->id }}</td>
                                        <td class="px-4 py-3">{{ $product->name }}</td>
                                        <td class="px-4 py-3">{{ $product->description }}</td>
                                        <td class="px-4 py-3">{{ number_format($product->price, 2) }}</td>
                                        <td class="px-4 py-3">{{ $product->quantity }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-4 py-6 text-center text-gray-500 dark:text-gray-400">No products available yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>