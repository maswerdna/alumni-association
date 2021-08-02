<x-guest-layout headertext="">
    <div class="content-area">
		<div class="p-6 sm:p-0">
            <div class="col-12 pt-2">
                <a href="/blog" class="border hover:bg-blue-700 hover:text-white font-bold py-1 px-2 rounded inline-block mb-4 sm:mt-4 mt-0 shadow"><< Blog</a>
                <div class="sm:p-4 mb-4 sm:border border-0 rounded sm:shadow-md shadow-0">
                    <h1 class="font-bold text-3xl sm:text-4xl">Edit Post</h1>
                    <p class="text-gray-500 mb-2">Edit and submit this form to update a post</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mt-2">
                            <div class="mb-4">
                                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Post Title</label>
                                <input type="text" id="title" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full" name="title" placeholder="Enter Post Title" value="{{ $post->title }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="body" class="block text-gray-700 text-sm font-bold mb-2">Post Body</label>
                                <textarea id="body" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full" name="body" placeholder="Enter Post Body" rows="5" required>{{ $post->body }}</textarea>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="mb-4 text-center">
                                <x-button id="btn-submit" class="mt-4 shadow">
                                    Update Post
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>