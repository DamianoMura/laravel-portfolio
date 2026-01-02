<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
          <p class="text-3xl text-center">Welcome {{Auth::user()->name}} ! {{Auth::user()->roles->pluck('name')->join(', ')}} </p>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   
                   <p class="mt-6 text-lg">
                    Below you will find a list of all the resources created to perform the various exercises regarding Resources and their CRUD controllers ...
                   </p>
                    <ul class="mt-4 list-disc list-inside">
                        <li class="translate-x-12"> <a href="{{ route('projects.index') }}" class="text-blue-500 hover:text-blue-700">Projects</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
