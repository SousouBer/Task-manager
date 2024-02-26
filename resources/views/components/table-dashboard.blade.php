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
                        <tr>
                            <x-table.tdata>Call Jim and ask about the quote</x-table.tdata>
                            <x-table.tdata>Systematic characterization and documentatin</x-table.tdata>
                            <x-table.tdata>23/06/2013</x-table.tdata>
                            <x-table.tdata>23/06/2013</x-table.tdata>
                            <x-table.tdata>
                                <x-table.table-button>{{ __('tasks.delete') }}</x-table-button>
                                <x-table.table-button>{{ __('tasks.edit') }}</x-table-button>
                                <x-table.table-button>{{ __('tasks.show') }}</x-table-button>
                            </x-table.tdata>                           
                        </tr>
                        <tr>
                            <x-table.tdata>Call Jim and ask about the quote</x-table.tdata>
                            <x-table.tdata>Systematic characterization and documentatin</x-table.tdata>
                            <x-table.tdata>23/06/2013</x-table.tdata>
                            <x-table.tdata>23/06/2013</x-table.tdata>
                            <x-table.tdata>
                                <x-table.table-button>{{ __('tasks.delete') }}</x-table-button>
                                <x-table.table-button>{{ __('tasks.edit') }}</x-table-button>
                                <x-table.table-button>{{ __('tasks.show') }}</x-table-button>
                            </x-table.tdata>                           
                        </tr>
                    </tbody>
                </table>
                
            </div>
