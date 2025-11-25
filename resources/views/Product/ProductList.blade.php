<x-app-layout>
    <x-slot name="header">
        <div class="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Product List') }}
            </h2>
           
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg overflow-hidden">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="overflow-x-auto">
                        <form method="GET" action="{{ route('product.index') }}" class="mb-4 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                            <!-- Left side: search + search/reset buttons -->
                            <div class="flex flex-wrap items-center space-x-2 mb-2 sm:mb-0">
                                <input type="text" name="search" placeholder="Search by name or email"
                                    value="{{ request('search') }}" class="border p-2 rounded">

                                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Search</button>

                                <a href="{{ route('product.index') }}"
                                    class="bg-red-500 text-white p-2 rounded hover:bg-red-600">
                                    Reset
                                </a>
                            </div>

                            <!-- Right side: Create button -->
                            <a href="{{ route('product.create') }}"
                                class="bg-green-500 p-2 rounded hover:bg-green-600 text-white shadow-xl">
                                Create Product
                            </a>
                        </form>
                       
                        <table class="w-full text-sm text-left border border-gray-200 dark:border-gray-700 rounded-lg">
                            <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 uppercase text-xs font-semibold">
                                <tr>

                                    <th class="px-4 py-3">NO</th>
                                    <th class="px-4 py-3">Name</th>
                                    <th class="px-4 py-3">Price</th>
                                    <th class="px-4 py-3">Stock</th>
                                    <th class="px-4 py-3">Employee</th>
                                    <th class="px-4 py-3 text-center">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                 @forelse($product as $products)
                                 {{$products}}
                                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-900 transition">
                                        {{-- <td class="px-4 py-2">{{ $loop->iteration + ($purchase->currentPage() - 1) * $purchase->perPage() }}</td> --}}
                                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-2 font-medium text-gray-800 dark:text-gray-100">{{ $products->name }}</td>
                                        <td class="px-4 py-2">{{ $products->price ?? '-' }}</td>
                                        <td class="px-4 py-2">{{ $products->stock ?? '-' }}</td>
                                        <td class="px-4 py-2">{{ $products->employeeid ?? '-' }}</td>
                                        <td class="px-4 py-2 text-center">
                                            <div class="flex justify-center gap-2">
                                                <a href=" " class="text-green-600 hover:text-green-800">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a href="{{route('product.edit', $products->id)}}" class="text-blue-600 hover:text-blue-800">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <form method="POST" action="{{ route('order.destroy', $products->id) }}" onsubmit="return confirm('Are you sure?')" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                      @empty
                                        <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-900 transition">
                                            <td colspan="7" class="px-4 py-2 text-center">No authors found.</td>
                                        </tr>
                               @endforelse
                            </tbody>
                        </table>
                         {{-- <div class="mt-4">
                            {{ $purchase->appends(request()->input())->links() }}
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
