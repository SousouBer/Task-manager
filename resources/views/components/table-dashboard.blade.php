            <div>
                <div class="flex justify-between">
                    <x-heading>YOUR TASKS</x-heading>

                    <div class="flex gap-6">
                        <button
                            class="border border-blue-400 rounded-lg py-3 px-6 font-bold text-blue-400 hover:bg-blue-300 hover:text-white hover:border-white transition-all duration-300"
                        >
                            DELETE OLD TASKS
                        </button>
                        <button
                            class="flex gap-4 rounded-lg py-3 px-6 font-bold bg-blue-400 text-white hover:bg-blue-300 transition-all duration-300"
                        >
                            <img
                                src="{{asset('/images/plus-circle.png')}}"
                                alt="Plus icon"
                            />
                            ADD TASK
                        </button>
                    </div>
                </div>
                <table class="min-w-full">
                    <thead>
                        <tr class="text-base py-32">
                            <x-table.thead>Task name</x-table.thead>
                            <x-table.thead>Description</x-table.thead>
                            <x-table.thead>Created at</x-table.thead>
                            <x-table.thead>Due date</x-table.thead>
                            <x-table.thead>Actions</x-table.thead>
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
                                <x-table.table-button>Delete</x-table-button>
                                <x-table.table-button>Edit</x-table-button>
                                <x-table.table-button>Show</x-table-button>
                            </x-table.tdata>                           
                        </tr>
                        <tr>
                            <x-table.tdata>Call Jim and ask about the quote</x-table.tdata>
                            <x-table.tdata>Systematic characterization and documentatin</x-table.tdata>
                            <x-table.tdata>23/06/2013</x-table.tdata>
                            <x-table.tdata>23/06/2013</x-table.tdata>
                            <x-table.tdata>
                                <x-table.table-button>Delete</x-table-button>
                                <x-table.table-button>Edit</x-table-button>
                                <x-table.table-button>Show</x-table-button>
                            </x-table.tdata>                           
                        </tr>
                    </tbody>
                </table>
                
            </div>
