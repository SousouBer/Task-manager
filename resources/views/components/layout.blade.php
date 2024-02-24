<x-main-layout>
    <section class="p-8 flex flex-row h-screen">
        <x-aside />

        {{ $slot }}
        
         <div class="mt-auto flex gap-12 self-end">
                <span class="cursor-pointer">English</span>
                <span class="cursor-pointer">ქართული</span>
            </div>
    </section>
</x-main-layout>