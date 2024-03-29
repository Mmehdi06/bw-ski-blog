<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Configure Password') }}
        </h2>

        <p class="mt-1 mb-5 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <div>
        <x-input-label for="update_password_password" :value="__('New Password')"/>
        <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full"
                      autocomplete="new-password"/>
        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2"/>
    </div>

    <div>
        <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')"/>
        <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                      class="mt-1 block w-full" autocomplete="new-password"/>
        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2"/>
    </div>

</section>
