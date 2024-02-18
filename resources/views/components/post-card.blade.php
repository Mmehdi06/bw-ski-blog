@props(['id','datetime', 'imageSrc', 'title', 'content'])

<a href="{{ route('post.show', $id) }}">
    <article class="overflow-hidden rounded-lg">
        <img
            alt=""
            src="{{ $imageSrc }}"
            class="h-56 w-full object-cover"
        />


        <div class="bg-white dark:bg-gray-800 p-4 sm:p-6">
            <time datetime="{{ $datetime }}"
                  class="block dark:text-gray-500 text-xs text-gray-500">{{ $datetime }}</time>


            <h3 class="mt-0.5 font-bold text-lg text-gray-900 dark:text-white">{{ $title }}</h3>


            <p class="mt-2 line-clamp-3  text-sm/relaxed text-gray-500 dark:text-gray-200">
                {{ $content }}
            </p>
        </div>
    </article>
</a>

