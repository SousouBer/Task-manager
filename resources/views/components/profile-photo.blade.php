@props(['src', 'name', 'type'])

<div class="flex items-center gap-10" x-data="{ showButton: false}">
    <div class="w-32 rounded-full overflow-hidden">
        <img id="{{ $type }}" src="{{ $src }}" class="w-full" alt="picture" />
    </div>

    <input class="hidden" x-on:change="handleFileUpload($event.target.files[0],
    '{{ $type }}', '{{ $src }}', '{{ $name }}')" type="file" id="{{ $name }}"
    name="{{ $name }}" accept="image/*"">

    <label
        class="cursor-pointer flex gap-2 border border-blue-400 rounded-lg py-3 px-6 font-bold text-blue-400 hover:bg-blue-300 hover:text-white hover:border-white"
        for="{{ $name }}"
    >
        <img src="{{ asset('/images/upload.png') }}" alt="Plus icon" />
        {{ $slot }}</label
    >
    <button
        type="button"
        style="display: none"
        id="{{ $type }}-btn"
        class="mr-3 text-gray-700 border-b border-gray-600 font-normal hover:text-gray-600"
    >
        {{ __("tasks.delete") }}
    </button>
</div>

<script>
    function handleFileUpload(file, imgType, src, name) {
        if (file) {
            const reader = new FileReader();

            reader.onload = function (event) {
                const imgFile = document.getElementById(imgType);
                const buttonId = imgType + "-btn";
                const btn = document.getElementById(buttonId);
                const inputEl = document.getElementById(name);

                imgFile.src = event.target.result;

                btn.style.display = "block";

                btn.addEventListener("click", () => {
                    imgFile.src = src;
                    inputEl.value = "";
                    btn.style.display = "none";
                });
            };

            reader.readAsDataURL(file);
        }
    }
</script>
