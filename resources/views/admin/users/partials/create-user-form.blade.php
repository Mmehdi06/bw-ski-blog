<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Create Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is created, you will have access to all its resources and data. Please ensure to secure your account information after creation.') }}        </p>
    </header>

    <form action="{{route('users.createUser')}}" method="post">
        @csrf
        <x-primary-button type="submit">{{ __('Create User') }}</x-primary-button>
    </form>


</section>
