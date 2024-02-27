@props(['link'])

<div class="self-start">
    <a href="{{ $link }}" class="flex items-center justify-center gap-4 uppercase">
        <img src="{{ asset('/images/Vector.png') }}" alt="Back icon" />{{ __('tasks.back') }}</a
    >
</div>
