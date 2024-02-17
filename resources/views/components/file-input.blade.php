@props(['id'])

<div {{ $attributes->merge(['class' => 'mt-2']) }}>
    <div>
        <label for="{{ $id }}"
               class="cursor-pointer flex items-center justify-between px-4 py-2 bg-white dark:bg-gray-800 rounded-md border border-gray-300 dark:border-gray-700">
            <span class="truncate">{{ __('Choose a file') }}</span>
            <span
                class="ml-2 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-700 dark:text-gray-400 bg-gray-200 dark:bg-gray-600 rounded">{{ __('Browse') }}</span>
        </label>
        <input type="file" id="{{ $id }}" name="{{ $id }}" accept="image/*" onchange="updateFileName(this)"
               class="hidden">
    </div>

    <div class="mt-2">
        <img id="preview" src="" alt="Avatar" class="hidden h-24 w-24 rounded-md object-cover">
    </div>
    <script>
        function updateFileName(input) {
            if (input.files.length === 0) {
                document.getElementById('preview').classList.add('hidden');
                input.closest('div').querySelector('label').innerText = 'Choose a file';

                return;
            }
            let fileName = input.files[0].name;
            let preview = document.getElementById('preview');
            let reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            };
            reader.readAsDataURL(input.files[0]);
            input.closest('div').querySelector('label').innerText = fileName;
        }
    </script>
</div>
