@php
    $classes = 'text-3xl font-bold uppercase';
@endphp
<h1 {{ $attributes(['class' =>  $classes]) }}>{{ $slot }}</h1>