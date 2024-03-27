<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('create new categories') }}
        </h2>
    </x-slot>

    <div class="max-w-3xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h2 class="text-2xl font-bold mb-4">Create Category</h2>
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">error!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif

            <form action="{{ route('create_category.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Category Name</label>
                    <input type="text" name="category_name" id="name" class="w-full border rounded py-2 px-3" required>
                   
                 
                </div>
                <!-- Add additional fields here -->

                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create Category
                </button>
            </form>
        </div>
    </div>
</div>
</x-app-layout>