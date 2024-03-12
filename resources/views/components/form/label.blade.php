@props(['name', 'placeholder'])

@php
    $classes = 'text-black absolute left-4 text-base transition-all duration-300 transform -translate-y-1/2 origin-top pointer-events-none';
@endphp

<label
    {{ $attributes->merge(['class' => $classes]) }}
    for="{{ $name }}"
    >{{ $placeholder }}
</label>