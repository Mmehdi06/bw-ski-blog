@props(['post'])

{{--format created_at date--}}
@php
    $date = new DateTime($post->created_at);
    $formattedDate = $date->format('d-m-Y');
@endphp

<article class="overflow-hidden rounded-lg">
    <a href="{{ route('post.show', $post->id) }}">

        <img
            alt=""
            src="{{ $post->post_image }}"
            class="h-56 w-full object-cover"
        />


        <div class="bg-white dark:bg-gray-800 p-4 sm:p-6">
            <time datetime="{{$formattedDate}}"
                  class="block dark:text-gray-500 text-xs text-gray-500">{{$formattedDate}}</time>


            <h3 class="mt-0.5 font-bold text-lg text-gray-900 dark:text-white">{{ $post->title }}</h3>


            <p class="mt-2 line-clamp-3  text-sm/relaxed text-gray-500 dark:text-gray-200">
                {{ $post->content }}
            </p>
        </div>
    </a>
    @if(auth()->user()->is_admin)
        <div class="flex justify-between items-center">

            {{--        Edit button--}}
            <div class="bg-white dark:bg-gray-800 ">
                <a href="{{ route('posts.edit', $post) }}"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
            </div>
            {{--        delete button--}}
            <div class="bg-white dark:bg-gray-800 ">
                <form action="{{ route('posts.delete', $post) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete
                    </button>
                </form>
            </div>
        </div>
    @endif
</article>


