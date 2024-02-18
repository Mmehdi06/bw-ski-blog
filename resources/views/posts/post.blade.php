<x-app-layout>


    {{--    show individual post information--}}
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 mt-14">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-6">
                    <x-post-card :id="$post->id" :datetime="$post->created_at->format('M d, Y')"
                                 :imageSrc="$post->post_image"
                                 :title="$post->title" :content="$post->content"/>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

