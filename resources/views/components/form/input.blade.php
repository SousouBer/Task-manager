@props(['name', 'type', 'placeholder', 'value' => '', 'labelName' => null, 'disabled' => false, 'required' => false])

@php
    $errorInputName = str_replace(['[', ']'], ['.', ''], $name);
@endphp

<div class="relative">
    <input class='"@error($errorInputName) border-red-500 @enderror"
    placeholder-gray-400 px-4 py-6 pt-10 border outline-none
    focus:border-blue-500 w-full h-16 bg-gray-100 rounded-2xl' type="{{
        $type
    }}" name="{{ $name }}" value="{{ $value }}"
    {{ $disabled ? "disabled" : "" }}
    {{ $required ? 'required' : "" }}
    placeholder="{{ $placeholder }}" id="{{ $name }}"/>
   <x-form.label class="top-1/2 " name="{{ $name }}" placeholder="{{ $labelName ?? $placeholder }}" />
</div>
