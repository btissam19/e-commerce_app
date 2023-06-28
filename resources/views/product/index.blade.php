 <x-app-layout>
<div class="flex justify-end mt-2 ml-2">
  <a  href="{{Route('product.create')}}" class="inline-flex items-center px-4 py-2 bg-indigo-600  border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">create new</a>
</div>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
  <h1 class="font-bold text-black"> your Product details</h1>
  <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
    <div class="flex flex-col md:flex-row">
      <div class="md:w-1/2">
        <img src="{{ $product->product_image}}" alt="Product Image" class="w-full h-auto">
      </div>
      <div class="md:w-1/2">
        <h2 class="text-2xl font-bold mb-4">{{ $product->product_name}}</h2>
        <p class="text-gray-700 mb-4">{{ $product->product_description }}</p>
        <p class="text-gray-700 mb-4">Price: ${{ $product->price}}</p>
        <p class="text-gray-700 mb-4">Quantity: {{ $product->quantity }}</p>
        <p class="text-gray-700 mb-4">Availability: {{ $product->availability }}</p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Add to Cart
        </button>
      </div>
    </div>
  </div>
</div>

  </x-app-layout>
  