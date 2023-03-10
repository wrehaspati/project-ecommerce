<x-admin-layout>
    @push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
    @endpush
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="px-10 py-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('blog.store') }}">
                    @csrf
                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700">Title</span>
                            <input type="text" name="title"
                                class="block w-full @error('title') border-red-500 @enderror mt-1 rounded-md"
                                placeholder="" value="{{old('title')}}" />
                        </label>
                        @error('title')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700">Slug</span>
                            <input type="text" name="slug"
                                class="block w-full @error('slug') border-red-500 @enderror mt-1 rounded-md"
                                placeholder="" value="{{old('slug')}}" />
                        </label>
                        @error('slug')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700">Description</span>
                            <textarea id="markdown-editor" class="block w-full mt-1 rounded-md" name="description"
                                rows="3"></textarea>
                        </label>
                        @error('description')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>

                </form>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
    <script>
        const easyMDE = new EasyMDE({
            showIcons: ['strikethrough', 'code', 'table', 'redo', 'heading', 'undo', 'heading-1', 'heading-2', 'heading-3', 'upload-image', 'clean-block', 'horizontal-rule'],
            element: document.getElementById('markdown-editor')});
    </script>
    @endpush
</x-admin-layout>