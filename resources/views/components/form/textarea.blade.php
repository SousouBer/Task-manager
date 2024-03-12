@props(['name', 'placeholder', 'value' => ''])

@php
    $errorInputName = str_replace(['[', ']'], ['.', ''], $name);
@endphp

<div class="relative">
<textarea
    class='"@error($errorInputName) border-red-500 @enderror" resize-none placeholder-gray-400 px-4 py-7 border outline-none focus:border-blue-500 w-full h-40 bg-gray-100 rounded-3xl !important'
    name="{{ $name }}"
    id="{{ $name }}"
    cols="30"
    rows="10"
    placeholder="{{ $placeholder }}"
>{{ $value }}</textarea>
    <x-form.label class="top-8" name="{{ $name }}" placeholder="{{ $placeholder }}" />
</div>
