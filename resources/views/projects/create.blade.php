<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
      {{ __('Create new Project') }}
    </h2>
  </x-slot>

  <div class="py-12">

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
          <form method="POST" action="{{ route('projects.store') }}">
            @csrf

            <div class="mb-4">
              <label for="title" class="block mb-2 font-bold text-gray-700 dark:text-gray-300">Title</label>
              <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="mb-4">
              <label for="description" class="block mb-2 font-bold text-gray-700 dark:text-gray-300">Description</label>
              <textarea name="description" id="description" rows="4" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required></textarea>
            </div>

            <div>
              <button type="submit" class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:ring">Create Project</button>
            </div>
          </form>
      </div>
    </div>
  </div>

</x-app-layout>