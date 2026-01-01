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
          <h1 class="mb-4 text-2xl font-bold">Projects</h1>
          @if($projects->isEmpty())
            <p>No projects available.</p>
          @else
            <ul class="space-y-4">
              @foreach($projects as $project)
                <li class="p-4 ">
                  <h2 class="text-xl font-semibold">{{ $project->title }}</h2>
                  <p class="text-gray-600">{{ Str::limit($project->description, 150) }}</p>
                  <a href="{{ route('projects.show', $project) }}" class="text-blue-500 hover:underline">View Project</a>
                </li>
              @endforeach
            </ul>
          @endif
        </div>
      </div>
    </div>
  </div>
</x-app-layout>