<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Supplier') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-2 mb-6">
                <a href="{{ route('dashboard') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Dashboard</a>
                <a href="{{ route('products') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Product List</a>
                <a href="{{ route('addProduct') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Add Product</a>
                <a href="{{ route('stock') }}" class="px-4 py-2 text-sm font-medium rounded-md bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100">Stock</a>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Supplier Form</h3>

                    <form method="POST" action="{{ route('supplier.store') }}" class="space-y-4 mb-8">
                        @csrf

                        <div>
                            <label for="supplier_name" class="block text-sm font-medium mb-1">Supplier Name</label>
                            <input id="supplier_name" name="supplier_name" type="text" class="w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" placeholder="Enter supplier name">
                        </div>

                        <div>
                            <label for="contact_number" class="block text-sm font-medium mb-1">Contact Number</label>
                            <input id="contact_number" name="contact_number" type="text" class="w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" placeholder="Enter contact number">
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Save Supplier</button>
                        </div>
                    </form>

                    <h3 class="text-lg font-semibold mb-4">Supplier List</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">ID</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">Supplier Name</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">Contact Number</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse(($suppliers ?? []) as $supplier)
                                    <tr>
                                        <td class="px-4 py-3">{{ $supplier->id }}</td>
                                        <td class="px-4 py-3">{{ $supplier->supplier_name }}</td>
                                        <td class="px-4 py-3">{{ $supplier->contact_number }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="px-4 py-6 text-center text-gray-500 dark:text-gray-400">No suppliers available yet.</td>
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