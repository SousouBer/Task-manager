@props(['src', 'name', 'type'])

<div class="flex items-center gap-10" x-data="{ showButton: false}">
    <div class="{{ $type === 'cover' ? 'rounded-tl-lg' : 'rounded-full' }} h-32 w-32 overflow-hidden">
        <img id="{{ $type }}" src="{{ $src }}" class="w-full h-full object-cover" alt="picture" />
    </div>

    <input class="hidden" x-on:change="handleFileUpload($event.target.files[0],
    '{{ $type }}', '{{ $src }}', '{{ $name }}')" type="file" id="{{ $name }}"
    name="{{ $name }}" accept="image/*"">

    <label
        class="cursor-pointer profile-user-label flex items-center uppercase gap-3 border border-blue-400 rounded-lg py-4 px-12 font-bold hover:bg-blue-300 hover:text-white hover:border-white"
        for="{{ $name }}"
    >
        <img src="{{ asset('/images/upload.png') }}" alt="Plus icon" />
        {{ $slot }}</label
    >
    <button
        type="button"
        style="display: none"
        id="{{ $type }}-btn"
        class="uppercase mr-3 text-gray-500 font-bold hover:text-gray-600"
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
