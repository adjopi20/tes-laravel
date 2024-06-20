    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
                <!-- Product Section -->
                <div class="mt-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-4">
                            {{ __('Manage Products') }}
                        </h2>
                        <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Add New Product
                        </a>
                        <a href="{{ route('products.index') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-4">
                            View All Products
                        </a>
                    </div>
                </div>

                 <!-- Search Product by Name -->
                 <div class="mt-4">
                    <form action="{{ route('products.search') }}" method="GET">
                        <div class="flex items-center">
                            <input type="text" name="name" placeholder="Search by product name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:shadow-outline">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-4">
                                Search
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </x-app-layout>
