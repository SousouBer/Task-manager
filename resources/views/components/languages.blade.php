<div class="mt-auto flex self-end py-8">
    <a class="{{ app()->getLocale() === 'en' ? 'active-locale' : '' }} py-4 px-6 rounded-xl" href="{{ route('change_language', ['locale' => 'en']) }}">English</a>
    <a class="{{ app()->getLocale() === 'ka' ? 'active-locale' : '' }} py-4 px-6 rounded-xl" href="{{ route('change_language', ['locale' => 'ka']) }}">ქართული</a>
</div>
