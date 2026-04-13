<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inventory Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Products</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-gray-100">{{ $productsCount ?? 0 }}</p>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Suppliers</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-gray-100">{{ $suppliersCount ?? 0 }}</p>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Stock Entries</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-gray-100">{{ $stocksCount ?? 0 }}</p>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Quick Navigation</h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <a href="{{ route('products') }}" class="block rounded-md border border-gray-200 dark:border-gray-700 p-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                            <p class="font-semibold">Product List</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">View and manage products</p>
                        </a>

                        <a href="{{ route('addProduct') }}" class="block rounded-md border border-gray-200 dark:border-gray-700 p-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                            <p class="font-semibold">Add Product</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Create a new product record</p>
                        </a>

                        <a href="{{ route('supplier') }}" class="block rounded-md border border-gray-200 dark:border-gray-700 p-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                            <p class="font-semibold">Supplier</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Register supplier information</p>
                        </a>

                        <a href="{{ route('stock') }}" class="block rounded-md border border-gray-200 dark:border-gray-700 p-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                            <p class="font-semibold">Stock</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Track stock quantities</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
