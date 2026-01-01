<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
          <h1 class="mb-4 text-2xl font-bold">{{ $project->title }}</h1>
          <p class="mb-4">{{ $project->description }}</p>
          <p class="mb-4"><strong>Created at:</strong> {{ $project->created_at->format('d M Y') }}</p>
          <p class="mb-4"><strong>Updated at:</strong> {{ $project->updated_at->format('d M Y') }}</p>
          <a href="{{ route('projects.index') }}" class="text-blue-500 hover:underline">Back to Projects</a>
        </div>
      </div>
    </div>
  </div>
    
</x-app-layout>