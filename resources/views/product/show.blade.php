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

        <div class="border border-gray-200 rounded-lg p-6">
            <h2 class="text-xl font-bold mb-4">Make an Enquiry</h2>

            @if(session('enquiry_sent'))
                <div class="bg-green-50 border border-green-200 text-green-800 rounded-lg px-4 py-3 mb-4">
                    Thanks for your enquiry! We'll be in touch shortly.
                </div>
            @endif

            <form action="{{ route('product.enquiry.store', $product) }}" method="POST" novalidate>
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                    <input type="text"
                           id="name"
                           name="name"
                           value="{{ old('name') }}"
                           class="w-full rounded-md border-gray-300 shadow-sm focus:border-red-600 focus:ring-red-600"
                           required>
                    @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           class="w-full rounded-md border-gray-300 shadow-sm focus:border-red-600 focus:ring-red-600"
                           required>
                    @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea id="message"
                              name="message"
                              rows="4"
                              class="w-full rounded-md border-gray-300 shadow-sm focus:border-red-600 focus:ring-red-600"
                              required>{{ old('message') }}</textarea>
                    @error('message')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full bg-red-600 hover:bg-red text-white font-medium py-2 px-6 rounded-md transition-colors">
                    Send Enquiry
                </button>
            </form>
        </div>
    </div>
</x-layout>


