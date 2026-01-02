<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between">
   <div>
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
        EDITING PROJECT : {{$project->title}}
      </h2>
      author : {{$project->author}}
   </div>
      <a href="{{ route('projects.index') }}" class="px-4 py-2 font-bold bg-gray-500 rounded hover:bg-gray-700 focus:outline-none focus:ring">Back to Projects</a>  
    </div>
  </x-slot>

  <div class="py-12">

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
          <form method="POST" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
              <label for="title" class="block mb-2 font-bold text-gray-700 dark:text-gray-300">Title</label>
              <input type="text" name="title" id="title"
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{$project->title}}" required>
            </div>
            <div class="mb-4">
              <x-category-dropdown :categories="$categories" :project="$project" />
            </div>

            <div class="mb-4">
           
              <label for="content" class="block mb-2 font-bold text-gray-700 dark:text-gray-300">Content</label>
              <input type="text" name="content" id="content" 
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{$project->content}}" required
                ></input>
            </div>

            <div class="mb-4">
              <label for="technologies" class="block mb-2 font-bold text-gray-700 dark:text-gray-300">Technologies</label>
              @foreach ($technologies as $item)
              <div class="inline-block mr-4">
                <input type="checkbox" name="technologies[]" id="technology_{{ $item->id }}" value="{{ $item->id }}" {{ in_array($item->id, old('technologies', $project->technologies->pluck('id')->toArray())) ? 'checked' : '' }} class="mr-2">
                <label for="technology_{{ $item->id }}" class="text-gray-700 dark:text-gray-300">
                  <i class="{{ $item->font_awesome_class }}"></i>
                  {{ $item->name }}</label>
              </div>
            
              @endforeach
            </div>
            <div class="flex items-center mb-4 space-x-6">
                <div class="flex items-center justify-center mx-auto bg-red-100 rounded-full size-12 shrink-0 sm:mx-0 sm:size-10">
                    @if ($project->img_path)
                      <img src="{{asset('/storage/'.$project->img_path)}}" alt="{{$project->title}}" class="object-scale-down w-24 h-24 rounded-full sm:w-20 sm:h-20">
                    @else
                      <span class="text-red-500"><i class="text-3xl fa-regular fa-image"></i></span>
                    @endif
                  </div>
                  <div>

                    <label for="file" class="block mb-2 font-bold text-gray-700 dark:text-gray-300">Project image</label>
                    <input type="file" name="file" id="file"
                      class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                  
                  </div>
                  </div>
            <div>
              <button type="submit"
                class="px-4 py-2 font-bold bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:ring">Update
                Project</button>
            </div>
          </form>
        </div>
      </div>
    </div>

</x-app-layout>