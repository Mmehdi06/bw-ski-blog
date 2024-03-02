<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <div class="flex justify-end">
            <a href="{{ route('users.create') }}"
               class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create User</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">

                @foreach($users as $user)
                    <div
                        class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg hover:shadow-2xl transition ">
                        <div class="p-6 text-gray-900 dark:text-gray-100 space-y-6">
                            <x-user-card :user="$user"/>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
