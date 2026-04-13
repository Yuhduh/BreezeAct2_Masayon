<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Stock') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-2 mb-6">
                <a href="{{ route('dashboard') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Dashboard</a>
                <a href="{{ route('products') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Product List</a>
                <a href="{{ route('addProduct') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Add Product</a>
                <a href="{{ route('supplier') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Supplier</a>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Stock Entry Form</h3>

                    <form method="POST" action="{{ route('stock.store') }}" class="space-y-4 mb-8">
                        @csrf

                        <div>
                            <label for="product_name" class="block text-sm font-medium mb-1">Product Name</label>
                            <input id="product_name" name="product_name" type="text" class="w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" placeholder="Enter product name">
                        </div>

                        <div>
                            <label for="quantity" class="block text-sm font-medium mb-1">Quantity</label>
                            <input id="quantity" name="quantity" type="number" min="0" class="w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" placeholder="0">
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Save Stock</button>
                        </div>
                    </form>

                    <h3 class="text-lg font-semibold mb-4">Stock List</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">ID</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">Product Name</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">Quantity</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse(($stocks ?? []) as $stock)
                                    <tr>
                                        <td class="px-4 py-3">{{ $stock->id }}</td>
                                        <td class="px-4 py-3">{{ $stock->product_name }}</td>
                                        <td class="px-4 py-3">{{ $stock->quantity }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="px-4 py-6 text-center text-gray-500 dark:text-gray-400">No stock entries available yet.</td>
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