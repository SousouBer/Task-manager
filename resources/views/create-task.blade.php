<x-layout>
    <div class="flex items-center flex-col justify-center">
        <x-back-button link="#" />

        <x-heading class="mb-14 uppercase">{{
            __("tasks.create_task")
        }}</x-heading>

        <form method="POST" action="{{ route('create_task') }}" class="w-2/4">
            @csrf

            <div class="flex flex-col gap-4 mb-5">
                <div>
                    <x-form.input
                        name="name-en"
                        type="text"
                        placeholder="{{ __('tasks.task_name_englisch') }}"
                    />
                    @error('name')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <x-form.input
                        name="name-ka"
                        type="text"
                        placeholder="{{ __('tasks.task_name_georgian') }}"
                    />
                    @error('name-ka')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <x-form.textarea
                        name="description"
                        placeholder="{{ __('tasks.description_english') }}"
                    />

                    @error('description-en')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <x-form.textarea
                        name="description-ka"
                        placeholder="{{ __('tasks.description_georgian') }}"
                    />

                    @error('description-ka')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <x-form.input
                        name="due_date"
                        type="date"
                        placeholder="Due date"
                    />

                    @error('due_date')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <x-form.button>{{ __("tasks.create_task") }}</x-form.button>
        </form>
    </div>
</x-layout>
