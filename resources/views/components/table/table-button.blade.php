@php
    $classes = "mr-3 text-gray-700 border-b border-gray-600 font-normal hover:text-gray-600";
@endphp

<a
    href="#"
    {{ $attributes(['class' => $classes]) }}
    >{{ $slot }}</a
>
