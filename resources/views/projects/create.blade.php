<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between space-x-4">
      <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
        {{ __('Create new Project') }}
      </h2>
      <div class="buttons">
          <a class="p-1 font-bold text-green-500 border-4 border-green-500 rounded-3xl hover:bg-green-500 hover:text-green-100 focus:outline-none focus:ring"
            href="{{route('projects.index')}}"><i class="fa-solid fa-angles-left"></i> back to project</a>
          <a class="p-1 font-bold text-green-500 border-4 border-green-500 rounded-3xl hover:bg-green-500 hover:text-green-100 focus:outline-none focus:ring"
            href="{{route('categories.index')}}"><i class="fa-solid fa-folder-tree"></i> manage category</a>
        </div>
    </div>
  </x-slot>

  <div class="py-12">

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
          <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
              <label for="title" class="block mb-2 font-bold text-gray-700 dark:text-gray-300">Title</label>
              <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
         <x-category-dropdown :categories="$categories" :project="new App\Models\Project()" />

            <div class="mb-4">
              <label for="content" class="block mb-2 font-bold text-gray-700 dark:text-gray-300">Description</label>
              <textarea name="content" id="content" rows="4" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required></textarea>
            </div>
            <div class="mb-4">
              <label for="technologies" class="block mb-2 font-bold text-gray-700 dark:text-gray-300">Technologies</label>
              @foreach ($technologies as $item)
                <div class="inline-block mr-4">
                  <input type="checkbox" name="technologies[]" id="technology_{{ $item->id }}" value="{{ $item->id }}" class="mr-2">
                  <label for="technology_{{ $item->id }}" class="text-gray-700 dark:text-gray-300">
                    <i class="{{ $item->font_awesome_class }}"></i>
                    {{ $item->name }}</label>
                </div>
                  
            </div>
            <div class="mb-4">
              <label for="file" class="block mb-2 font-bold text-gray-700 dark:text-gray-300">Project image</label>
              <input type="file" name="file" id="file" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
              
            </div>
            <div>
              <button type="submit" class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:ring">Create Project</button>
            </div>
          </form>
      </div>
    </div>
  </div>

</x-app-layout>