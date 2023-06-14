<x-app-layout>
    <x-slot name="header">
        Edit article
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('admin.articles.update', $article) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <x-input-label for="title">Title</x-input-label>
                            <x-text-input id="title" class="block w-full mt-1" name="title" required value="{{ old('title', $article->title) }}" type="text"/>
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
                            <x-input-label class="block text-sm text-gray-600">Tags</x-input-label>
                            <x-text-input id="tags" class="block w-full mt-1" name="tags" type="text" value="{{ old('tags', $tags) }}"/>
                            <span class="text-xs text-gray-400">Separated by comma</span>
                            @error('tags')
                                <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <x-input-label for="category">Category</x-input-label>
                            <select name="category" id="category" class="block w-full mt-1">
                                <option value="#">--- SELECT CATEGORY ---</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if (in_array($category->id, $article->category->pluck('id')->toArray())) selected @endif>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <x-input-label class="block text-sm text-gray-600" for="article">Article</x-input-label>
                            <textarea name="article" id="article" rows="6" class="block w-full mt-1" required>{{ old('article', $article->article) }}</textarea>
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