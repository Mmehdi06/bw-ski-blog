<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">
                        {{ __('Profile Information') }}
                    </div>

                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <!-- Replace with actual avatar image URL or use a default -->
                            <img class="h-24 w-24 rounded-full" src="{{ asset($user->profile_avatar_url) }}"
                                 alt="{{ $user->name }}">
                        </div>
                        <div class="ml-4">
                            <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-200">{{ $user->name }}</h1>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Email: :email', ['email' => $user->email]) }}</p>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Date of Birth: :dob', ['dob' => $user->date_of_birth ?? 'Not provided']) }}</p>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Bio: :bio', ['bio' => $user->bio ?? 'Not provided']) }}</p>
                        </div>
                    </div>
                </div>

                <!-- More sections can be added as needed -->

            </div>
        </div>
    </div>
</x-app-layout>
