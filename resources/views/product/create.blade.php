<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class=" font-bold text-black">Create new </h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product_name">
                      Product Name:
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_name" type="text" placeholder="Enter product name" name="product_name">
                    <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
                  </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product_description">
                      Product Description:
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_description" placeholder="Enter product description" name="product_description"></textarea>
                    <x-input-error :messages="$errors->get('product_description')" class="mt-2" />
                  </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                      Price:
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" type="text" placeholder="Enter price" name="price">
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                  </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">
                      Quantity:
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="quantity" type="text" placeholder="Enter quantity" name="quantity">
                    <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                  </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product_image">
                      Product Image:
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_image" type="file" name="product_image">
                    <x-input-error :messages="$errors->get('product_image')" class="mt-2" />
                  </div>
                  <div class="mb-4">
                    <span class="block text-gray-700 text-sm font-bold mb-2">Product Availability:</span>
                    <label class="inline-flex items-center">
                      <input type="radio" class="form-radio h-5 w-5 text-gray-600" name="availability" value="in-stock">
                      <span class="ml-2">In Stock</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                      <input type="radio" class="form-radio h-5 w-5 text-gray-600" name="availability" value="out-of-stock">
                      <span class="ml-2">Out of Stock</span>
                    </label>
                    <x-input-error :messages="$errors->get('availability')" class="mt-2" />
                  </div>
                  <div class="flex items-center justify-end mt-4">
                    <a href="{{Route('product.index')}}"class="inline-flex items-center px-4 py-2 bg-indigo-600  border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                        submit
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
{{-- <x-app-layout>
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
   --}}