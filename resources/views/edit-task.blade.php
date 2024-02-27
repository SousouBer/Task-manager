<x-layout>
    <div class="flex items-center flex-col justify-center">
        <x-back-button link="#" />

        <x-heading class="mb-14 uppercase">{{ __('tasks.edit_task') }}</x-heading>

        <form method="POST" action="#" class="w-2/4">
            <div class="flex flex-col gap-4 mb-5">
                <x-form.input
                    name="name-en"
                    type="text"
                    placeholder="{{ __('tasks.task_name_englisch') }}"
                />

                <x-form.input
                    name="name-ka"
                    type="text"
                    placeholder="{{ __('tasks.task_name_georgian') }}"
                />

                <x-form.textarea
                    name="description-en"
                    placeholder="{{ __('tasks.description_english') }}"
                />
                <x-form.textarea
                    name="description-ka"
                    placeholder="{{ __('tasks.description_georgian') }}"
                />

                <x-form.input name="date" type="date" placeholder="Due date" />
            </div>
            <x-form.button>{{ __('tasks.edit_changes') }}</x-form.button>
        </form>
    </div>
</x-layout>
