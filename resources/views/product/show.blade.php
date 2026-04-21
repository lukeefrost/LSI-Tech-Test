<x-layout>
    <x-slot:title>{{ $product->name }}</x-slot>

    <h1 class="text-3xl font-bold mb-8">{{ $product->name }}</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        
        <div>
            <div class="prose max-w-none mb-6">
                {!! $product->description !!}
            </div>

            <p class="text-2xl font-bold text-gray-900 mb-8">&pound;{{ number_format($product->price, 2) }}</p>
        </div>
    </div>
</x-layout>


