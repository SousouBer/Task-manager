          @props(['tasks'])

          <div>
                <div class="flex justify-between">
                    <x-heading>{{ __('tasks.your_tasks') }}</x-heading>

                    <div class="flex gap-6">
                        <button
                            class="border border-blue-400 rounded-lg py-3 px-6 font-bold text-blue-400 hover:bg-blue-300 hover:text-white hover:border-white transition-all duration-300"
                        >
                            {{ __('tasks.delete_old_tasks') }}
                        </button>
                        <button
                            class="flex gap-4 rounded-lg py-3 px-6 font-bold bg-blue-400 text-white hover:bg-blue-300 transition-all duration-300"
                        >
                            <img
                                src="{{asset('/images/plus-circle.png')}}"
                                alt="Plus icon"
                            />
                            {{ __('tasks.add_task') }}
                        </button>
                    </div>
                </div>
                <table class="min-w-full">
                    <thead>
                        <tr class="text-base py-32">
                            <x-table.thead>{{ __('tasks.task_name') }}</x-table.thead>
                            <x-table.thead>{{ __('tasks.description') }}</x-table.thead>
                            <x-table.thead>{{ __('tasks.created_at') }}</x-table.thead>
                            <x-table.thead>{{ __('tasks.due_date') }}</x-table.thead>
                            <x-table.thead>{{ __('tasks.actions') }}</x-table.thead>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <x-table.tdata>{{ $task->name }}</x-table.tdata>
                                <x-table.tdata>{{ $task->description }}</x-table.tdata>
                                <x-table.tdata>{{ $task->created_at->format('Y-m-d') }}</x-table.tdata>
                                <x-table.tdata>{{ $task->due_date }}</x-table.tdata>
                                <x-table.tdata>
                                    <x-table.table-button>{{ __('tasks.delete') }}</x-table-button>
                                    <x-table.table-button>{{ __('tasks.edit') }}</x-table-button>
                                    <x-table.table-button>{{ __('tasks.show') }}</x-table-button>
                                </x-table.tdata>                           
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $tasks->links() }}

                </div>                
            </div>
