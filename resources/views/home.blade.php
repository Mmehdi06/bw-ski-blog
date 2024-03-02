<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    @vite('resources/css/app.css')

</head>
<body class="antialiased">
<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen  bg-center bg-gray-100  dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="flex justify-center items-center gap-3 absolute top-0 left-0 p-6">
        <img src="{{URL('/images/ski-logo.png')}}" alt="Ski Blog Logo" class="h-12 w-12">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white">Ski Blog</h1>
    </div>
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ route('public.home') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="dark:bg-gray-800 bg-neutral-200 py-24 sm:py-10 rounded-2xl">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Recent Blog Posts</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600 dark:text-gray-300">Here are some of the recent
                    articles. Log in to see more...</p>
            </div>
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3 border-white">

                @foreach($posts as $post)
                    <article
                        class="flex p-6 max-w-xl flex-col py-3 items-start justify-between hover:shadow-2xl shadow-md bg-gray-100 dark:bg-gray-700 rounded-2xl">
                        <div class="flex items-center gap-x-4 text-xs ">
                            <time datetime="{{$post->created_at}}"
                                  class="text-gray-500 dark:text-gray-400">{{$post->created_at->format('M d, Y')}}</time>
                            <a href=""
                               class="relative z-10 rounded-full bg-gray-50 dark:bg-gray-600 px-3 py-1.5 font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 ">{{$post->category}}</a>
                        </div>
                        <div class="relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-white hover:text-gray-600 dark:hover:text-gray-400">
                                <a href="{{ route('post.show', $post->id) }}">
                                    <span class=>{{$post->title}}</span>
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600 dark:text-gray-300">{{$post->content}}</p>
                        </div>
                        <div class="relative mt-14 flex items-center gap-x-4">
                            <img
                                src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" class="h-10 w-10 rounded-full bg-gray-50 dark:bg-gray-800">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-900 dark:text-white">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Michael Foster
                                    </a>
                                </p>

                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>

</div>
</body>
</html>
