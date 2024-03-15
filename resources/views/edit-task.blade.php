<x-layout>
    <div class="flex items-center flex-col justify-center">
        <x-back-button link="{{ route('tasks.index') }}" />

        <x-heading class="mb-14 uppercase">{{
            __("tasks.edit_task")
        }}</x-heading>

        <form method="POST" action="{{ route('tasks.update', ['task' => $task->id]) }}" class="w-2/4">
            @csrf @method('PATCH')
            <div class="flex flex-col gap-4 mb-5">
                <div>
                    <x-form.input
                        name="name[en]"
                        type="text"
                        value="{!! $task->getTranslation('name', 'en') !!}"
                        placeholder="{{ __('tasks.task_name_englisch') }}"
                    />

                    <x-error-message name="name.en" />
                </div>
                <div>
                    <x-form.input
                        name="name[ka]"
                        type="text"
                        value="{!! $task->getTranslation('name', 'ka') !!}"
                        placeholder="{{ __('tasks.task_name_georgian') }}"
                    />
                    <x-error-message name="name.ka" />
                </div>
                <div>
                    <x-form.textarea
                        name="description[en]"
                        placeholder="{{ __('tasks.description_english') }}"
                        value="{!! $task->getTranslation('description', 'en') !!}"
                    />
                    <x-error-message name="description.en" />
                </div>
                <div>
                    <x-form.textarea
                        name="description[ka]"
                        value="{!! $task->getTranslation('description', 'ka') !!}"
                        placeholder="{{ __('tasks.description_georgian') }}"
                    />
                    <x-error-message name="description.ka" />
                </div>
                <div>
                    <x-form.input
                        name="due_date"
                        type="date"
                        value="{{ $task->due_date }}"
                        placeholder="{{ __('tasks.due_date') }}"
                    />
                    <x-error-message name="due_date" />
                </div>
            </div>
            <x-form.button>{{ __("tasks.edit_changes") }}</x-form.button>
        </form>
    </div>
</x-layout>
