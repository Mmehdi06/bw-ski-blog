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
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                      required autofocus autocomplete="name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    {{--add email--}}
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                      required autocomplete="username"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>


    </div>

    {{--add an avatar--}}
    <div>
        <x-input-label for="profile_avatar_url" :value="__('Avatar')"/>
        <x-file-input id="profile_avatar_url" name="profile_avatar_url" class="mt-1 block w-full"
                      required autofocus autocomplete="profile_avatar_url"/>
        <x-input-error class="mt-2" :messages="$errors->get('profile_avatar_url')"/>
    </div>
    {{--add DOB--}}
    <div>
        <x-input-label for="date_of_birth" :value="__('Date of Birth')"/>
        <x-text-input id="date_of_birth" name="date_of_birth" type="date" class="mt-1 block w-full" required
                      autocomplete="date_of_birth"/>
        <x-input-error class="mt-2" :messages="$errors->get('date_of_birth')"/>
    </div>


</section>
