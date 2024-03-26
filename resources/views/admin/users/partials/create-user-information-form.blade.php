<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 mb-5 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    {{--add name--}}
    <div class="mt-3">
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                      required autofocus autocomplete="name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    {{--add email--}}
    <div class="mt-3">
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                      required autocomplete="username"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>
    {{--add isadmin--}}
    <div class="mt-3">
        <x-input-label for="is_admin" :value="__('Is Admin')"/>
        <x-checkbox id="is_admin" name="is_admin" class="mt-1" :value="true"/>
        <x-input-error class="mt-2" :messages="$errors->get('is_admin')"/>
    </div>


</section>
