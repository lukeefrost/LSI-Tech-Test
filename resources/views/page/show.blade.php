<x-layout>
    <x-slot:title>{{ $page->title }}</x-slot>
    
    <h1 class="text-3xl font-bold mb-6">{{ $page->title }}</h1>

    <div class="prose max-w-none mb-8">
        {!! $page->content !!}
    </div>

    @isset($products)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
                <x-product-grid-item :product="$product" />
            @endforeach
        </div>
    @endisset
</x-layout>