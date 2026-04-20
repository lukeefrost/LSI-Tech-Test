<a href="{{ route('product.show', $product) }}" class="flex flex-col items-center border border-gray-200 rounded-lg p-4 text-center hover:shadow-md hover:border-gray-300 transition-all">
    <img src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->name }}" class="mb-4 w-full object-contain aspect-square">
    <span class="font-medium text-gray-800">{{ $product->name }}</span>
</a>