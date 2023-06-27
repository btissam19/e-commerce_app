{{-- <x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 text-white dark:bg-gray-900">
        <h1 class="text-black text-lg font-bold">{{ $product->title }}</h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-gray-900 text-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <div class="text-white flex justify-between py-4">
                <p>{{ $product->description }}</p>
                <p>{{ $product->created_at->diffForHumans() }}</p>
                @if ($product->attachment)
                    <a href="{{ '/storage/' . $product->attachment }}" target="_blank">Attachment</a>
                @endif
            </div>

            <div class="flex justify-between">
                <div class="flex">
                    <a href="{{ route('product.edit', $product->id) }}">
                        <x-primary-button>Edit</x-primary-button>
                    </a>

                    <form class="ml-2" action="{{ route('product.destroy', $product->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <x-primary-button>Delete</x-primary-button>
                    </form>
                </div>
                @if (auth()->user()->isAdmin)
                    <div class="flex">
                        <form action="{{ route('product.update', $product->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <input type="hidden" name="status" value="resolvedfffg" />
                            <x-primary-button>Resolve</x-primary-button>
                        </form>
                        <form action="{{ route('product.update', $product->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <input type="hidden" name="status" value="rejected" />
                            <x-primary-button class="ml-2">Reject</x-primary-button>
                        </form>
                    </div>
                @else
                    <p class="text-white">Status: {{ $product->status }} </p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout> --}}