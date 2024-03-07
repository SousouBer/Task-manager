<x-layout>
    <div>
        <div class="flex justify-between items-center">
        <div class="w-3/6">
            <x-heading>{{ $task->name }}</x-heading>
        </div>
            <button
                class="flex gap-4 rounded-lg py-3 px-6 font-bold text-blue-300 border border-blue-300 transition-all duration-300"
            >
                <img src="{{ asset('/images/edit.png')}}" alt="Plus icon" />
                {{__('tasks.edit_task') }}
            </button>
        </div>
        <div class="flex flex-col justify-center my-12">
            <span>{{__('tasks.description') }}</span>
            <div style="max-width: 57%;">
                <p class="my-3 text-lg leading-8 w-10/12">
                {{ $task->description }}
            </p>
            </div>
        </div>
        <div class="flex gap-16">
            <div class="flex flex-col justify-center gap-2">
                <span>{{__('tasks.created_at') }}</span>
                <span class="text-lg">{{ $task->created_at->format('Y-m-d') }}</span>
            </div>
            <div class="flex flex-col justify-center gap-2">
                <span>{{__('tasks.due_date') }}</span>
                <span class="text-lg">{{ $task->due_date }}</span>
            </div>
        </div>
    </div>
</x-layout>
