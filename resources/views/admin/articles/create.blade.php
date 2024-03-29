<x-app-layout>
    <x-slot name="header">
            Create article
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="title">Title</x-input-label>
                            <x-text-input id="title" class="block w-full mt-1" name="title" value="{{ old('title') }}" type="text" required/>
                            @error('title')
                                <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <x-input-label for="image">Image</x-input-label>
                            <x-text-input id="image" class="block w-full mt-1" name="image" type="file"/>
                            @error('image')
                                <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <x-input-label for="tags">Tags</x-input-label>
                            <x-text-input id="tags" class="block w-full mt-1" name="tags" type="text" value="{{ old('tags') }}"/>
                            <span class="text-xs text-gray-400">Separated by comma</span>
                            @error('tags')
                                <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <x-input-label for="Category">Category</x-input-label>
                            <select name="category" id="category" class="block w-full mt-1">
                                <option value="0">--- SELECT CATEGORY ---</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($category->id === old('category')) selected @endif>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <x-input-label for="article">Article</x-input-label>
                            <textarea id="article" class="block w-full mt-1" name="article" rows="6">{{ old('article') }}</textarea>
                            @error('article')
                                <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <x-primary-button>Submit</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>