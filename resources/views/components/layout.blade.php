<x-main-layout>
    <section class="p-8 flex flex-row h-screen">
        <x-aside />

        <div class="flex-grow flex flex-col p-20 pt-32">

            {{ $slot }}

            <x-languages />
        </div>
    </section>
</x-main-layout>
