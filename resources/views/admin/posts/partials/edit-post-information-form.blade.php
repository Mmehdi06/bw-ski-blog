<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Edit Post') }}
        </h2>

        <p class="mt-1 mb-5 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update this post and save it.") }}
        </p>
    </header>

    {{--    Edit Post Title--}}
    <div class="grid grid-cols-1 gap-6">
        <label for="title" class="block">
            <span class="text-gray-700 dark:text-gray-300">{{ __('Title') }}</span>
            <input type="text" name="title" id="title" value="{{ $post->title }}"
                   class="mt-1 block w-full rounded-md dark:bg-gray-700 dark:text-gray-300 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </label>
    </div>

    {{--    Edit Post Content--}}
    <div class="grid grid-cols-1 gap-6">
        <label for="content" class="block">
            <span class="text-gray-700 dark:text-gray-300">{{ __('Content') }}</span>
            <textarea name="content" id="content" rows="10"
                      class="mt-1 block w-full rounded-md dark:bg-gray-700 dark:text-gray-300 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">{{ $post->content }}</textarea>
        </label>
    </div>


</section>
