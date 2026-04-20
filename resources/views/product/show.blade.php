<x-layout>
    <h1 class="text-3xl font-bold mb-8">{{ $product->name }}</h1>

    <div class="product-page">
        <div>
            <img src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->name }}">
        </div>

        <div class="prose max-w-none mb-6">
            {!! $product->description !!}

            <p class="text-2xl font-bold text-gray-900 mb-8">&pound;{{ $product->price }}</p>
        </div>
    </div>
</x-layout>