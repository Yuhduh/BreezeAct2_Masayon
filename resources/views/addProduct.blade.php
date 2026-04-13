<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-2 mb-6">
                <a href="{{ route('dashboard') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Dashboard</a>
                <a href="{{ route('products') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Product List</a>
                <a href="{{ route('supplier') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Supplier</a>
                <a href="{{ route('stock') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Stock</a>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Product Information</h3>

                    <form method="POST" action="{{ route('addProduct.store') }}" class="space-y-4">
                        @csrf

                        <div>
                            <label for="name" class="block text-sm font-medium mb-1">Product Name</label>
                            <input id="name" name="name" type="text" class="w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" placeholder="Enter product name">
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium mb-1">Description</label>
                            <textarea id="description" name="description" rows="3" class="w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" placeholder="Enter product description"></textarea>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="price" class="block text-sm font-medium mb-1">Price</label>
                                <input id="price" name="price" type="number" min="0" step="0.01" class="w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" placeholder="0.00">
                            </div>

                            <div>
                                <label for="quantity" class="block text-sm font-medium mb-1">Quantity</label>
                                <input id="quantity" name="quantity" type="number" min="0" class="w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" placeholder="0">
                            </div>
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Save Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>