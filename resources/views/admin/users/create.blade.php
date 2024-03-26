<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <form action="{{route('users.store')}}" method="post">
        @csrf
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('admin.users.partials.create-user-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('admin.users.partials.create-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <section class="space-y-6">
                            <header>
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Create Account') }}
                                </h2>
                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('Once your account is created, you will have access to all its resources and data. Please ensure to secure your account information after creation.') }}        </p>
                            </header>
                            <x-primary-button type="submit">{{ __('Create User') }}</x-primary-button>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
