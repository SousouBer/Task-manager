@php
    $classes = "pt-10 pb-4 pr-4 text-left font-normal whitespace-nowrap";
@endphp
<th {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</th>
