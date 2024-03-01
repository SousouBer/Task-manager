<x-layout>
    <div>
        <div class="flex justify-between items-center">
            <x-heading>{{ $task->name }}</x-heading>
            <button
                class="flex gap-4 rounded-lg py-3 px-6 font-bold text-blue-300 border border-blue-300 transition-all duration-300"
            >
                <img src="{{ asset('/images/edit.png')}}" alt="Plus icon" />
                EDIT TASK
            </button>
        </div>
        <div class="flex flex-col justify-center my-12">
            <span>Description</span>
            <p class="my-3 text-lg leading-8 w-10/12">
                {{ $task->description }}
            </p>
        </div>
        <div class="flex gap-16">
            <div class="flex flex-col justify-center gap-2">
                <span>Created at</span>
                <span class="text-lg">{{ $task->created_at->format('T-m-d') }}</span>
            </div>
            <div class="flex flex-col justify-center gap-2">
                <span>Due date</span>
                <span class="text-lg">{{ $task->due_date }}</span>
            </div>
        </div>
    </div>
</x-layout>
