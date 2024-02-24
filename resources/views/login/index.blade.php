<x-main-layout>
    <section class="flex items-center justify-center">
        <div class="flex items-center justify-center h-screen w-4/5 py-6">
            <div class="flex-1 flex justify-end">
                <img
                    class="self-end"
                    src="/images/Intersect.png"
                    alt="Login cover"
                />
            </div>
            <div
                class="flex-1 flex items-center justify-center flex-col h-screen pb-20"
            >
                <div class="w-4/5 mt-auto">
                    <div class="flex items-center justify-between pb-7">
                        <div>
                            <h1 class="text-4xl font-bold mb-1">
                                {{ mb_strtoupper("welcome back!") }}
                            </h1>
                            <span class="text-base text-gray-600"
                                >Please, enter your details</span
                            >
                        </div>
                        <div>
                            <img src="/images/Group.png" alt="Smile icon" />
                        </div>
                    </div>
                    <form method="POST" action="#">
                        <div class="flex gap-4 flex-col py-4">
                            <div>
                                <x-form.input name="email" type="email" placeholder="E-mail" />
                            </div>
                            <div class="relative">
                                <x-form.input name="password" type="password" placeholder="Write your Password" />
                                <div
                                    class="absolute right-0 top-1/2 transform -translate-x-full -translate-y-1/2"
                                >
                                    <img
                                        class="cursor-pointer"
                                        src="/images/eye.png"
                                        alt="Eye icon"
                                    />
                                </div>
                            </div>
                        </div>
                        <x-form.button>LOG IN</x-form.button>
                    </form>
                </div>

                <x-languages />
            </div>
        </div>
    </section>
</x-main-layout>
