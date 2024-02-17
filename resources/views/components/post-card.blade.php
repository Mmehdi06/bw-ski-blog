@props(['datetime', 'imageSrc', 'title', 'content'])

<article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
    <img
        alt=""
        src="{{ $imageSrc }}"
        class="h-56 w-full object-cover"
    />

    <div class="bg-white p-4 sm:p-6">
        <time datetime="{{ $datetime }}" class="block text-xs text-gray-500">{{ $datetime }}</time>

        <a href="#">
            <h3 class="mt-0.5 text-lg text-gray-900">{{ $title }}</h3>
        </a>

        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
            {{ $content }}
        </p>
    </div>
</article>

