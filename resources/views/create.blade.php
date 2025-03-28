<x-layout>
    <div class="flex items-center flex-col justify-center">
        <x-back-button link="{{ route('tasks.index') }}" />

        <x-heading class="mb-14 uppercase">{{
            __("tasks.create_task")
        }}</x-heading>

        <form method="POST" action="{{ route('tasks.store') }}" class="w-2/4">
            @csrf

            <div class="flex flex-col gap-4 mb-5">
                <div>
                    <x-form.input
                        name="name[en]"
                        value="{{ old('name.en') }}"
                        type="text"
                        placeholder="{{ __('tasks.task_name_englisch') }}"
                    />
                    <x-error-message name="name.en" />
                </div>
                <div>
                    <x-form.input
                        name="name[ka]"
                        value="{{ old('name.ka') }}"
                        type="text"
                        placeholder="{{ __('tasks.task_name_georgian') }}"
                    />
                    <x-error-message name="name.ka" />
                </div>
                <div>
                    <x-form.textarea
                        name="description[en]"
                        value="{{ old('description.en') }}"
                        placeholder="{{ __('tasks.description_english') }}"
                    />
                    <x-error-message name="description.en" />
                </div>
                <div>
                    <x-form.textarea
                        name="description[ka]"
                        value="{{ old('description.ka') }}"
                        placeholder="{{ __('tasks.description_georgian') }}"
                    />
                    <x-error-message name="description.ka" />
                </div>
                <div>
                    <x-form.input
                        name="due_date"
                        value="{{ old('due_date') }}"
                        type="date"
                        placeholder="{{ __('tasks.due_date') }}"
                    />
                    <x-error-message name="due_date" />
                </div>
            </div>
            <x-form.button>{{ __("tasks.create_task") }}</x-form.button>
        </form>
    </div>
</x-layout>
