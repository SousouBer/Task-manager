@props(['src', 'name', 'type'])

<div class="flex items-center gap-10" x-data="{ showButton: false}">
    <div class="w-32 rounded-full overflow-hidden">
        <img id="{{ $type }}" src="{{ $src }}" class="w-full" alt="picture" />
    </div>

    <input class="hidden" x-on:change="handleFileUpload($event.target.files[0], '{{ $type }}')" type="file" id="{{ $name }}" name="{{ $name }}"
    accept="image/*"">

    <label
        class="cursor-pointer flex gap-2 border border-blue-400 rounded-lg py-3 px-6 font-bold text-blue-400 hover:bg-blue-300 hover:text-white hover:border-white"
        for="{{ $name }}"
    >
        <img src="{{ asset('/images/upload.png') }}"  alt="Plus icon" />
        {{ $slot }}</label
    >
        <button style="display: none;" id="{{ $type }}-btn" class="mr-3 text-gray-700 border-b border-gray-600 font-normal hover:text-gray-600"
>Delete</button>

     <script>
        function handleFileUpload(file, imgType) {
            if (file) {
                const reader = new FileReader();

                reader.onload = function(event) {
                document.getElementById(imgType).src = event.target.result;

                const buttonId = imgType + '-btn';
                document.getElementById(buttonId).style.display = "block";
                };

                reader.readAsDataURL(file);
            }
        }
    </script>   
    </div>
