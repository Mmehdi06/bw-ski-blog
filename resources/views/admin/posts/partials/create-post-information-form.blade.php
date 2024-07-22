<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Create Post') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Create a post and save it.") }}
        </p>
    </header>

    <form method="post" enctype="multipart/form-data" action="{{ route('posts.store') }}" class="mt-6 space-y-6">
        @csrf

        {{-- Post Cover image--}}
        <div>
            <x-input-label for="post_image" :value="__('Post post_image')"/>
            <x-file-input id="post_image" name="post_image" class="mt-1 block w-full" autofocus
                          autocomplete="post_image"/>
            <x-input-error class="mt-2" :messages="$errors->get('post_image')"/>
        </div>

        {{-- Post Title --}}
        <div>
            <x-input-label for="title" :value="__('Title')"/>
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')"
                          required autofocus autocomplete="title"/>
            <x-input-error class="mt-2" :messages="$errors->get('title')"/>
        </div>

        {{-- Post Content --}}
        <div>
            <x-input-label for="content" :value="__('Content')"/>
            <x-text-area id="content" name="content" rows="10" class="mt-1 block w-full" :value="old('content')"
                         required autofocus autocomplete="content"/>
            <x-input-error class="mt-2" :messages="$errors->get('content')"/>
        </div>

        <div>
            <x-primary-button type="submit">Create</x-primary-button>
        </div>
    </form>
</section>
