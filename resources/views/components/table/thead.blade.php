@php
    $classes = "py-8 pr-4 text-left font-normal whitespace-nowrap";
@endphp
<th {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</th>
