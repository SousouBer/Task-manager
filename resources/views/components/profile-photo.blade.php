@props(['src', 'name']) 

@php 

$buttonClasses = 'cursor-pointer flex flex-shrink-0 items-center
justify-center gap-2 border border-blue-400 rounded-lg py-3 px-6 font-bold
text-blue-400 hover:bg-blue-300 hover:text-white hover:border-white
transition-all duration-300'; 

@endphp

<div class="flex items-center gap-10">
    <div class="w-32">
        <img src="{{ $src }}" class="w-full" alt="Profile picture" />
    </div>

    <input class="hidden" type="file" id="{{ $name }}" name="{{ $name }}"
    accept="image/*"">

    <label {{ $attributes(['class' => $buttonClasses]) }}  for="{{ $name }}">
        <img src="{{ asset('/images/upload.png') }}" alt="Plus icon" />
        {{ $slot }}</label
    >
    <x-table.table-button class="border-none">{{
        __("profile.delete")
    }}</x-table.table-button>
</div>
