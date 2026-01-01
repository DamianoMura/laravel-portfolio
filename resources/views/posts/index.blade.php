<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <h1 class="mb-4 text-2xl font-bold">Posts</h1>
          @if($posts->isEmpty())
            <p>No posts available.</p>
          @else
            <ul class="space-y-4">
              @foreach($posts as $post)
                <li class="pb-4 border-b">
                  <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                  <p class="text-gray-600">{{ Str::limit($post->body, 150) }}</p>
                  <a href="{{ route('posts.show', $post) }}" class="text-blue-500 hover:underline">Read more</a>
                </li>
              @endforeach
            </ul>
          @endif
              
        </div>
      </div>
    </div>
  </div>
</x-app-layout>