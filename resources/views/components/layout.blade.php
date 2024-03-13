<x-main-layout>
    <section class="p-8 flex flex-row h-screen">
        <x-aside />

        <div class="flex-grow flex flex-col p-20 pt-32 {{ app()->getLocale() === 'ka' ? 'ml-80' : 'ml-44' }}">

            {{ $slot }}

            <x-languages />
        </div>
    </section>
</x-main-layout>
