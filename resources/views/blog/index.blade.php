<x-app-layout>
	<div class="bg-gray-100">
		<div class="welcome-grid-layout">
			<div class="grid-left">
				<span></span>
			</div>
			<div class="grid-content blog">
				<div class="bg-white p-4 border sm:rounded-lg">
					<div class="flex bg-yellow-600 text-white items-start rounded p-4 mb-4 shadow">
						<div class="flex-auto">
							<!-- <h1 class="display-one">Unilorin Alumni Blog!</h1> -->
							<h1 class="text-4xl mb-2 font-black sm:text-5xl md:text-6xl">Unilorin <span class="text-yellow-300">Alumni</span></h1>
							<p class="font-bold">Enjoy reading our posts. Click on a post to read!</p>
						</div>
						<div class="border rounded-lg py-2 px-4 flex flex-col align-center shadow-lg bg-yellow-700">
							<p class="font-bold">Create new Post</p>
							<x-button class="mt-2">
								<a href="/blog/create/post" class="w-full text-center">Add Post</a>
							</x-button>
						</div>
					</div>
					@forelse($posts as $post)
						<ul class="p-2 mb-2 border rounded hover:shadow-lg">
							<li>
								<a href="./blog/{{ $post->id }}">
									<h3 class="text-2xl font-bold">{{ ucfirst($post->title) }}</h3>
									<span class="text-gray-500 text-sm">Posted by {{ $post->user->name }} @ {{ date('d M H:i', strtotime($post->created_at)) }}</span>
									<div class="mt-2">{{ substr($post->body, 0, 256) }}...</div>
								</a>
							</li>
						</ul>
					@empty
						<p class="text-warning">No blog Posts available</p>
					@endforelse
				</div>
			</div>
			<div class="grid-right">
				<div class="w-full border sm:max-w-md px-6 py-6 bg-white overflow-hidden sm:rounded-lg">
					@include('auth.reg-form', ['heading' => 'Join Our Prestigous Platform'])
				</div>
			</div>
		</div>
	</div>
</x-app-layout>