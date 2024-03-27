<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product Inventory') }}
        </h2>
    </x-slot>

    <h1>Category Data Form</h1>
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif
    <form action="{{ route('submit_category_data') }}" method="POST">
        @csrf
        @foreach ($categoryData as $category)
            <input type="text" name="category_data[{{ $category->id }}]" placeholder="{{ $category->category_name }}">
        @endforeach
        <button type="submit">Submit Form</button>
    </form>
</x-app-layout>