<x-app-layout>
    <x-slot name="header">
            Articles list
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <x-link :href="route('admin.articles.create')">Create</x-link>
                    </div>
                    <table class="w-full text-left border-collaps">
                        <thead>
                            <tr>
                                <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light">#</th>
                                <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light">Title</th>
                                <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light">Category</th>
                                <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 border-b border-gray-200">1</td>
                                <td class="px-6 py-4 border-b border-gray-200">Kniga</td>
                                <td class="px-6 py-4 border-b border-gray-200">Novaya</td>
                                <td class="px-6 py-4 border-b border-gray-200">
                                    <x-link>Edit</x-link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>