<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class=" font-bold text-black">Create new </h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product-name">
                      Product Name:
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product-name" type="text" placeholder="Enter product name" name="product-name">
                    <x-input-error :messages="$errors->get('product-name')" class="mt-2" />
                  </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product-description">
                      Product Description:
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product-description" placeholder="Enter product description" name="product-description"></textarea>
                    <x-input-error :messages="$errors->get('product-description')" class="mt-2" />
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
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product-image">
                      Product Image:
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product-image" type="file" name="product-image">
                    <x-input-error :messages="$errors->get('product-image')" class="mt-2" />
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
                    <x-primary-button class="ml-3">
                        submit
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>