<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="flex content-center justify-between mx-auto mb-4 max-w-7xl sm:px-6 lg:px-8"> 
     
      <a href='{{ $post->id > 1 ? route('posts.show', $post->id - 1) : 1 }}' ><- prev  </a>
     
      {{ $post->id." / ".$post->count() }}

      <a href="{{ $post->id < $post->count()-1 ? route('posts.show', $post->id + 1) : $post->count()-1 }}"> next -></a>
   
      
    </div>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        <div class="flex flex-col p-6 text-gray-900 dark:text-gray-100">
          <h1 class="mb-4 text-2xl font-bold">Author : {{$post->author}}</h1>
          <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
          <p class="mt-4 text-gray-600">{{ $post->content }}</p> 
          <small class="self-end">Published on: {{ $post->created_at->format('F j, Y') }}</small>

          

        </div>
        
      </div>
    </div>
  </div>
</x-app-layout>