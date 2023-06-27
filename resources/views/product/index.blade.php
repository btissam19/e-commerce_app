{{-- <x-app-layout>
  <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
      <div class="flex justify-between w-full sm:max-w-xl">
          <h1 class="text-black text-lg font-bold">your product</h1>
          <div>
              <a href="{{ route('product.create') }}" class="bg-white rounded-lg p-2">add new product</a>
          </div>
      </div>
      <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
          @forelse ($product as $product)
              <div class="text-black flex justify-between py-4">
                  <a href="{{ route('product.show', $product->id) }}">{{ $product->title }}</a>
                  <p>{{ $product->created_at->diffForHumans() }}</p>
              </div>
          @empty
              <p class="text-black">You don't have any product to sell.</p>
          @endforelse
      </div>
  </div>
</x-app-layout> --}}