<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg overflow-hidden">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                         <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="text-center text-3xl">
                                <h1>Create Product</h1>
                            </div>

                         
                            <div class="mt-3">
                                <label for="name">
                                    <span class="text-gray-700 dark:text-gray-300 text-lg font-semibold">Name</span>
                                </label>
                                <br>
                                <input type="text" name="name" id="name" class="w-full rounded-sm" placeholder="Please Enter Name">
                            </div>
                            <div class="mt-3">
                                <label for="price">
                                    <span class="text-gray-700 dark:text-gray-300 text-lg font-semibold">Price</span>
                                </label>
                                <br>
                                <input type="text" name="price" id="price"  class="w-full rounded-sm" placeholder="Please Enter Price">
                            </div>
                            <div class="mt-3">
                                <label for="stock">
                                    <span class="text-gray-700 dark:text-gray-300 text-lg font-semibold">Stock</span>
                                </label>
                                <br>
                                <input type="text" name="stock" id="stock"  class="w-full rounded-sm" placeholder="Please Enter Stock">
                            </div>
                                <label for="description">
                                    <span class="text-gray-700 dark:text-gray-300 text-lg font-semibold">Description</span>
                                </label>
                                <textarea name="description" id="description" class="w-full" placeholder="Please Enter Description">
                                </textarea>
                            </div>
                        <div class="mt-4 flex gap-4">
                            <a href="{{ route('product.index') }}" class="bg-red-500 p-2 rounded text-white hover:bg-red-600 w-full text-center">Cancel</a>
                            <button type="submit" class="bg-green-500 p-2 rounded text-white hover:bg-green-600 w-full">Save</button>
                        </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
