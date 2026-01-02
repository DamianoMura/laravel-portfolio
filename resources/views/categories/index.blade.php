<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between space-x-4">


      <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
        Categories
      </h2>
      <div class="buttons">
        <a class="p-1 font-bold text-green-500 border-4 border-green-500 rounded-3xl hover:bg-green-500 hover:text-green-100 focus:outline-none focus:ring"
          href="{{route('projects.index')}}"><i class="fa-solid fa-angles-left"></i> back to project</a>
        <a class="p-1 font-bold text-green-500 border-4 border-green-500 rounded-3xl hover:bg-green-500 hover:text-green-100 focus:outline-none focus:ring"
          href="{{route('categories.create')}}"><i class="fa-solid fa-folder-tree"></i> add category</a>
      </div>
    </div>
@if (session('success'))
    <div class="p-4 mt-4 text-green-800 bg-green-200 border border-green-600 rounded opacity-50">
      {{ session('success') }}
    </div>
    @endif
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

          @if($categories->isEmpty())
            <p>No categories available.</p>
          @else
            <ul class="space-y-4">
              @foreach($categories as $category)
                <li class="flex flex-col p-4 border rounded-lg">
                  <div class="flex items-center mb-4">
                    <div>

                          <h2 class="text-xl font-semibold">{{ $category->name }}</h2>

                        </div>
                        <div class="flex items-center justify-between ml-auto space-x-4">
                          {{-- buttons --}}
                          
                          
                          <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
                          <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
                          @if($category->id > 1)
                          <a class="font-bold text-yellow-500 hover:text-yellow-800 focus:outline-none focus:ring"
                           href="{{route('categories.edit', $category->id)}}"><i class="text-2xl fa-solid fa-pen-to-square"></i> </a>  
                            <button command="show-modal" commandfor="dialog"
                              class="font-bold text-red-500 hover:text-red-800 focus:outline-none focus:ring"><i
                                class="text-2xl fa-solid fa-trash-can"></i></button>
                                <el-dialog>
                                  <dialog id="dialog" aria-labelledby="dialog-title"
                                    class="fixed inset-0 overflow-y-auto bg-transparent size-auto max-h-none max-w-none backdrop:bg-transparent">
                                    <el-dialog-backdrop
                                      class="fixed inset-0 transition-opacity bg-gray-500/75 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in">
                                    </el-dialog-backdrop>
                                
                                    <div tabindex="0"
                                      class="flex items-end justify-center min-h-full p-4 text-center focus:outline-none sm:items-center sm:p-0">
                                      <el-dialog-panel
                                        class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                                        <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                                          <div class="sm:flex sm:items-start">
                                            <div
                                              class="flex items-center justify-center mx-auto bg-red-100 rounded-full size-12 shrink-0 sm:mx-0 sm:size-10">
                                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                                                aria-hidden="true" class="text-red-600 size-6">
                                                <path
                                                  d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                                  stroke-linecap="round" stroke-linejoin="round" />
                                              </svg>
                                            </div>
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                              <h3 id="dialog-title" class="text-base font-semibold text-gray-900">Deleting Category :
                                                {{$category->name}}</h3>
                                              <div class="mt-2">
                                                <p class="text-sm text-gray-500">Are you sure you want to delete this category? the Project associated
                                                  with it will be set as Unspecified</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 sm:flex sm:flex-row-reverse sm:px-6">
                                
                                
                                          <form action="{{route('categories.destroy', $category)}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit"
                                              class="inline-flex justify-center w-full px-3 py-2 text-sm font-semibold text-white bg-red-600 rounded-md shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">Confirm
                                              Deletion</button>
                                          </form>
                                
                                
                                
                                
                                          <button type="button" command="close" commandfor="dialog"
                                            class="inline-flex justify-center w-full px-3 py-2 mt-3 text-sm font-semibold text-gray-900 bg-white rounded-md shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                                        </div>
                                      </el-dialog-panel>
                                    </div>
                                  </dialog>
                                </el-dialog>
                                @else
                                <span class="font-bold text-gray-400">{{$category->description}}  (default Category)</span>
                          @endif
                           
                        </div>
                </li>
              @endforeach
            </ul>
          @endif
        </div>
      </div>
    </div>
  </div>
</x-app-layout>