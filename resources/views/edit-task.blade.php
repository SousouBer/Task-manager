<x-layout>
    <div class="flex items-center flex-col justify-center">
        <x-back link="#" />

        <x-heading class="mb-14">EDIT TASK</x-heading>

        <form method="POST" action="#" class="w-2/4">
            <div class="flex flex-col gap-4 mb-5">
                <x-form.input
                    name="name-en"
                    type="text"
                    placeholder="Task name in English"
                />

                <x-form.input
                    name="name-ka"
                    type="text"
                    placeholder="Task name in Georgian"
                />

                <x-form.textarea
                    name="description-en"
                    placeholder="Description in English"
                />
                <x-form.textarea
                    name="description-ka"
                    placeholder="Description in Georgian"
                />

                <x-form.input name="date" type="date" placeholder="Due date" />
            </div>
            <x-form.button>EDIT CHANGES</x-form.button>
        </form>
    </div>
</x-layout>
