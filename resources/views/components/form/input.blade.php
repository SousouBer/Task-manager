@props(['name', 'type', 'placeholder'])

<input
    class="placeholder-gray-400 px-4 py-6 border outline-none focus:border-blue-500 w-full h-16 bg-gray-100 rounded-3xl"
    type="{{ $type }}"
    name={{ $name }}
    placeholder="{{ $placeholder }}"
    id="{{ $name }}"
/>
