<x-layout>
    <div class="flex items-center flex-col justify-center">
        <x-back-button link="#" />

        <x-heading class="mb-14 uppercase">{{
            __("tasks.create_task")
        }}</x-heading>

        <form method="POST" action="{{ route('tasks.store') }}" class="w-2/4">
            @csrf

            <div class="flex flex-col gap-4 mb-5">
                <div>
                    <x-form.input
                        name="name_en"
                        type="text"
                        placeholder="{{ __('tasks.task_name_englisch') }}"
                    />
                    <x-error-message name="name_en" />
                </div>
                <div>
                    <x-form.input
                        name="name_ka"
                        type="text"
                        placeholder="{{ __('tasks.task_name_georgian') }}"
                    />
                    <x-error-message name="name_ka" />
                </div>
                <div>
                    <x-form.textarea
                        name="description_en"
                        placeholder="{{ __('tasks.description_english') }}"
                    />
                    <x-error-message name="description_en" />
                </div>
                <div>
                    <x-form.textarea
                        name="description_ka"
                        placeholder="{{ __('tasks.description_georgian') }}"
                    />
                    <x-error-message name="description_ka" />
                </div>
                <div>
                    <x-form.input
                        name="due_date"
                        type="date"
                        placeholder="Due date"
                    />
                    <x-error-message name="due_date" />
                </div>
            </div>
            <x-form.button>{{ __("tasks.create_task") }}</x-form.button>
        </form>
    </div>
</x-layout>
