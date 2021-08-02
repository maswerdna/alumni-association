<x-guest-layout headertext="">
	<div class="content-area">
		<div class="p-6 sm:p-0">
			<a href="/blog" class="border hover:bg-blue-700 hover:text-white font-bold py-1 px-2 rounded inline-block mb-4 sm:mt-4 mt-0 shadow"><< Blog</a>
			<ul class="sm:p-8 mb-4 sm:border border-0 rounded sm:shadow-md shadow-0">
				<li>
					<a href="./blog/{{ $post->id }}">
						<h3 class="text-2xl sm:text-4xl font-bold">{{ ucfirst($post->title) }}</h3>
						<span class="text-gray-500 text-sm">Posted by {{ $post->user->name }} @ {{ date('d M H:i', strtotime($post->created_at)) }}</span>
						<div class="mt-2">{!! $post->body !!}</div>
					</a>
				</li>
			</ul>
			<hr>
			<div class="shadow bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block mt-4">
				<a href="/blog/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit Post</a>
			</div>
			<form id="delete-frm" class="" action="" method="POST">
				@method('DELETE')
				@csrf
				<button class="shadow bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded inline-block mt-4 mb-4">Delete Post</button>
			</form>
		</div>
	</div>
</x-guest-layout>