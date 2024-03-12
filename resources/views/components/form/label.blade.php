@props(['name', 'placeholder'])

@php
    $classes = 'absolute left-4 text-base text-gray-400 transition-all duration-300 transform -translate-y-1/2 origin-top pointer-events-none';
@endphp

<label
    {{ $attributes->merge(['class' => $classes]) }}
    for="{{ $name }}"
    >{{ $placeholder }}
</label>