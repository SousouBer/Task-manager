@props(['name', 'type', 'placeholder', 'value' => '', 'disabled' => false])

<input
    class='"@error($name) border-red-500 bg-red-100 @enderror" placeholder-gray-400 px-4 py-6 border outline-none focus:border-blue-500 w-full h-16 bg-gray-100 rounded-3xl'
    type="{{ $type }}"
    name="{{ $name }}"
    value="{{ $value }}"
    {{ $disabled ? 'disabled' : '' }}
    placeholder="{{ $placeholder }}"
    id="{{ $name }}"
/>
 