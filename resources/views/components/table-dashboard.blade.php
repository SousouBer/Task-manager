          @props(['tasks'])
            <div>
                <div class="flex justify-between">
                    <x-heading>{{ __('tasks.your_tasks') }}</x-heading>

                    <div class="flex gap-6">
                        <form method="POST" action="{{ route('tasks.destoryOld') }}">
                        @csrf
                        @method('DELETE')
                        <button
                        class="cursor-pointer border border-blue-400 rounded-lg py-3 px-6 font-bold text-blue-400 hover:bg-blue-300 hover:text-white hover:border-white transition-all duration-300"
                        >
                        {{ __('tasks.delete_old_tasks') }}
                        </button>
                        </form> 
                        <a
                            href="{{ route('tasks.create') }}"
                            class="whitespace-nowrap items-center cursor-pointer flex gap-4 rounded-lg py-3 px-6 font-bold bg-blue-400 text-white hover:bg-blue-300 transition-all duration-300"
                        >
                            <img
                                src="{{asset('/images/plus-circle.png')}}"
                                alt="Plus icon"
                            />
                            {{ __('tasks.add_task') }}
                        </a>
                    </div>
                </div>
                @if(!$tasks->isEmpty())
                <table class="min-w-full">
                    <thead>
                        <tr class="text-base py-32">
                            <x-table.thead style="width: 25%;">{{ __('tasks.task_name') }}</x-table.thead>
                            <x-table.thead style="width: 35%;">{{ __('tasks.description') }}</x-table.thead>
                            <x-table.thead style="width: 10%;">
                                <div class="flex items-center gap-4">
                                    {{ __('tasks.created_at') }}
                                    <div>
                                        <x-sorting-button src="{!! asset('images/components/angle-up-solid.svg') !!}" href="{!! route('tasks.index', ['sortBy' => 'created_at', 'sortDirection' => 'asc']) !!}" />
                                        <x-sorting-button src="{!! asset('images/components/angle-down-solid.svg') !!}" href="{!!route('tasks.index', ['sortBy' => 'created_at', 'sortDirection' => 'desc']) !!}" />
                                    </div>   
                                </div>
                            </x-table.thead>
                            <x-table.thead style="width: 10%;">
                                <div class="flex items-center gap-4">
                                    {{ __('tasks.due_date') }}
                                    <div>
                                        <x-sorting-button src="{!! asset('images/components/angle-up-solid.svg') !!}" href="{!! route('tasks.index', ['sortBy' => 'due_date', 'sortDirection' => 'asc']) !!}" />
                                        <x-sorting-button src="{!! asset('images/components/angle-down-solid.svg') !!}" href="{!! route('tasks.index', ['sortBy' => 'due_date', 'sortDirection' => 'desc']) !!}" />
                                    </div> 
                                 </div>
                            </x-table.thead>
                            <x-table.thead style="width: 20%;">{{ __('tasks.actions') }}</x-table.thead>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <x-table.tdata class="max-w-xs">
                                    <p class="whitespace-nowrap overflow-hidden max-w-xs">{{ $task->name }}</p>
                                </x-table.tdata>
                                <x-table.tdata class="max-w-lg">
                                    <p class="whitespace-nowrap overflow-hidden max-w-xs">{{ $task->description }}</p>
                                </x-table.tdata>
                                <x-table.tdata>{{ $task->created_at->format('Y-m-d') }}</x-table.tdata>
                                <x-table.tdata style="{{ $task->due_date < now() ? 'color: red;' : '' }}">{{ $task->due_date }}</x-table.tdata>
                                <x-table.tdata>
                                     <div class="flex items-center">                               
                                        <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="mr-3 text-gray-700 border-b border-gray-600 font-normal hover:text-gray-600">{{ __('tasks.delete') }}</button>
                                        </form>
                                        <x-table.table-button route="{{ route('tasks.edit', ['task' => $task->id]) }}" >{{ __('tasks.edit') }}</x-table-button>
                                        <x-table.table-button route="{{ route('tasks.show', ['task' => $task->id]) }}">{{ __('tasks.show') }}</x-table-button>
                                    </div>
                                </x-table.tdata>                           
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <div class="w-full flex justify-center">
                        <p class="text-xl font-bold py-20">You don't have any tasks yet. Add one!</p>
                    </div>
                @endif
                <div>
                    {{ $tasks->links() }}
                </div>                
            </div>
