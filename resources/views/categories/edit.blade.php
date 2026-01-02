<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between space-x-4">
      <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
        {{ __('Editing Category') }} : {{ $category->name }}
      </h2>
      <div class="buttons">
          <a class="p-1 font-bold text-green-500 border-4 border-green-500 rounded-3xl hover:bg-green-500 hover:text-green-100 focus:outline-none focus:ring"
            href="{{route('projects.create')}}"><i class="text-2xl fa-solid fa-file-circle-plus"></i> create project</a>
          <a class="p-1 font-bold text-green-500 border-4 border-green-500 rounded-3xl hover:bg-green-500 hover:text-green-100 focus:outline-none focus:ring"
            href="{{route('categories.index')}}"><i class="fa-solid fa-folder-tree"></i> manage category</a>
        </div>
    </div>
  </x-slot>

  <div class="py-12">

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
          <form method="POST" action="{{ route('categories.update', $category->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
              <label for="title" class="block mb-2 font-bold text-gray-700 dark:text-gray-300">Title</label>
              <input type="text" name="name" id="name"
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required value="{{$category->name}}">
            </div>

            <div class="mb-4">
              <label for="description" class="block mb-2 font-bold text-gray-700 dark:text-gray-300">Description</label>
              <input type="text" name="description" id="description" rows="4"
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{$category->description}}"
                required></textarea>
            </div>

            <div>
              <button type="submit"
                class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:ring">Edit
                category</button>
            </div>
          </form>
        </div>
      </div>
    </div>

</x-app-layout>