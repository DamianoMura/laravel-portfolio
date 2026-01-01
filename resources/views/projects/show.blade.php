<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between">

    <div>
      <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
          {{ $project->title }}
        </h2>
        <h3>Author: {{ $project->author }}</h3>
    </div>
      <div class="flex flex-col flex-grow space-x-4 sm:flex-row sm:flex-grow-0">
        <a class="p-1 font-bold text-yellow-500 border-4 border-yellow-500 rounded-3xl hover:bg-yellow-500 hover:text-yellow-100 focus:outline-none focus:ring" href="{{route('projects.edit', $project->id)}}"><i class="text-2xl fa-solid fa-pen-to-square"></i> </a>
        {{-- <form action="{{route('projects.destroy', $project)}}">
          @csrf
          @method('DELETE')
          <button type="submit" class="px-4 py-2 font-bold bg-red-500 border-red-500 rounded hover:bg-white focus:outline-none focus:ring border-5">elimina</button>
        </form> --}}

        <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
        <button command="show-modal" commandfor="dialog"
          class="p-1 font-bold text-red-500 border-4 border-red-500 rounded-3xl hover:bg-red-500 hover:text-red-100 focus:outline-none focus:ring"><i class="text-2xl fa-solid fa-trash-can"></i></button>
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
                      <h3 id="dialog-title" class="text-base font-semibold text-gray-900">Deleting Project : {{$project->title}}</h3>
                      <div class="mt-2">
                        <p class="text-sm text-gray-500">Are you sure you want to deactivate your account? All of your data will
                          be permanently removed. This action cannot be undone.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 sm:flex sm:flex-row-reverse sm:px-6">


                  <form action="{{route('projects.destroy', $project)}}" method="POST">
                    @csrf
                    @method("DELETE")
                  <button type="submit" 
                    class="inline-flex justify-center w-full px-3 py-2 text-sm font-semibold text-white bg-red-600 rounded-md shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">Confirm Deletion</button>
                  </form>




                  <button type="button" command="close" commandfor="dialog"
                    class="inline-flex justify-center w-full px-3 py-2 mt-3 text-sm font-semibold text-gray-900 bg-white rounded-md shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
              </el-dialog-panel>
            </div>
          </dialog>
        </el-dialog>
      </div>
    </div>
  </x-slot>

  <div class="py-12">

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
       
          <p class="mb-4">{{ $project->content }}</p>

          <div class="flex items-center justify-between p-4 mb-6 text-gray-800 rounded-lg bg-slate-200 dark:bg-gray-700 dark:text-gray-300 ">

            <small><strong>Created at:</strong> {{ $project->created_at}}</small>
            <small><strong>Updated at:</strong> {{ $project->updated_at}}</small>

          </div>
          <a href="{{ route('projects.index') }}" class="text-blue-500 hover:underline">Back to Projects</a>
        </div>
      </div>
    </div>
  </div>
    
</x-app-layout>