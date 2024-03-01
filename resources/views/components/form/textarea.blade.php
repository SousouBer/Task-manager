@props(['name', 'placeholder'])

<textarea
    class='"@error($name) border-red-500 bg-red-100 @enderror" resize-none placeholder-gray-400 px-4 py-6 border outline-none focus:border-blue-500 w-full h-40 bg-gray-100 rounded-3xl !important'
    name="{{ $name }}"
    id="{{ $name }}"
    cols="30"
    rows="10"
    placeholder="{{ $placeholder }}"
></textarea>
