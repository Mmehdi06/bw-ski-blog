<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="p-24">
        <div class="max-w-2xl mx-auto bg-white p-24 shadow-md rounded-md">
            <h3 class="text-2xl font-semibold mb-4">Documentation Used:</h3>

            <ul class="list-disc pl-8">
                <li class="mb-4">
                    <span class="font-semibold">Laravel Documentation:</span>
                    <ul class="list-inside ml-4">
                        <li><a href="https://laravel.com/docs" class="text-blue-500 hover:underline" target="_blank">Official
                                Laravel Docs</a></li>
                        <li><a href="https://laracasts.com" class="text-blue-500 hover:underline" target="_blank">Laracasts</a>
                        </li>
                        <!-- Add other Laravel documentation links as needed -->
                    </ul>
                </li>
                <li class="mb-4">
                    <span class="font-semibold">Tailwind CSS Documentation:</span>
                    <ul class="list-inside ml-4">
                        <li><a href="https://tailwindcss.com/docs" class="text-blue-500 hover:underline"
                               target="_blank">Official Tailwind CSS Docs</a></li>
                        <li><a href="https://tailwindui.com/" class="text-blue-500 hover:underline" target="_blank">Tailwind
                                Components</a></li>
                        <!-- Add other Tailwind CSS documentation links as needed -->
                    </ul>
                </li>
                <li class="mb-4">
                    <span class="font-semibold">PHP Documentation:</span>
                    <ul class="list-inside ml-4">
                        <li><a href="https://www.php.net/docs.php" class="text-blue-500 hover:underline"
                               target="_blank">Official PHP Docs</a></li>
                        <!-- Add other PHP documentation links as needed -->
                    </ul>
                </li>
                <li class="mb-4">
                    <span class="font-semibold">Debugging & Errors:</span>
                    <ul class="list-inside ml-4">
                        <li><a href="https://stackoverflow.com/" class="text-blue-500 hover:underline" target="_blank">Stack
                                Overflow</a></li>
                        <li><a href="https://chat.openai.com/" class="text-blue-500 hover:underline" target="_blank">OpenAI
                                ChatGPT</a></li>
                        <!-- Add other debugging & error handling links as needed -->
                    </ul>
                </li>
                <li class="mb-4">
                    <span class="font-semibold">GitHub Repo:</span>
                    <ul class="list-inside ml-4">
                        <li><a href="https://github.com/Mmehdi06/bw-ski-blog"
                               class="text-blue-500 hover:underline" target="_blank">Ski-Blog Repo</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</x-app-layout>
