<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div>
                        <p><strong>Name:</strong> {{ $product->name }}</p>
                        <p><strong>Description:</strong> {{ $product->description ?? 'N/A' }}</p>
                        <p><strong>Price:</strong> ${{ $product->price }}</p>
                        <p><strong>Created At:</strong> {{ $product->created_at->format('M d, Y H:i A') }}</p>
                        <p><strong>Last Updated:</strong> {{ $product->updated_at->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>