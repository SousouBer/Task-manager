<x-layout>
    <section class="p-8 flex flex-row h-screen">
        <aside class="h-full py-8 px-8 flex flex-col bg-gray-100 rounded-xl">
            <div>
                <div class="flex items-center justify-center mb-20">
                    <div>
                        <img src="/images/avatar.png" alt="Avatar png" />
                    </div>
                </div>
                <div>
                    <ul class="flex flex-col gap-6">
                        <div class="flex items-center gap-2 text-lg">
                            <div>
                                <img src="/images/tasks.png" alt="Tasks" />
                            </div>
                            <li class="text-lg text-gray-900">My tasks</li>
                        </div>
                        <div class="flex items-center gap-2 text-lg">
                            <div>
                                <img src="/images/due.png" alt="Due tasks" />
                            </div>
                            <li class="cursor-pointer text-gray-900">
                                Due tasks
                            </li>
                        </div>
                        <div class="flex items-center gap-2 text-lg">
                            <div>
                                <img src="/images/profile.png" alt="Profile" />
                            </div>
                            <li class="cursor-pointer text-gray-900">
                                Profile
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="flex items-center gap-2 mt-auto">
                <img src="/images/logout.png" alt="Logout icon" />
                <span class="text-gray-900 text-lg">Log out</span>
            </div>
        </aside>
        <div class="flex-grow flex flex-col p-20 pt-32">
            <div>
                <div class="flex justify-between">
                    <h1 class="text-3xl font-bold">YOUR TASKS</h1>
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
                                src="/images/plus-circle.png"
                                alt="Plus icon"
                            />
                            ADD TASK
                        </button>
                    </div>
                </div>
                <table class="min-w-full">
                    <thead>
                        <tr class="text-base py-32">
                            <th class="py-8 pr-4 text-left font-normal">
                                Task name
                            </th>
                            <th class="py-8 pr-4 text-left font-normal">
                                Description
                            </th>
                            <th class="py-8 pr-4 text-left font-normal">
                                Created at
                            </th>
                            <th class="py-8 pr-4 text-left font-normal">
                                DUe Date
                            </th>
                            <th class="py-8 pr-4 text-left font-normal">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-4 pr-4 text-gray-500">
                                Call Jim and ask about the quote
                            </td>
                            <td class="py-4 pr-4 text-gray-500">
                                Systematic characterization and documentatin
                            </td>
                            <td class="py-4 pr-4 text-gray-500">23/06/2013</td>
                            <td class="py-4 pr-4 text-gray-500">23/06/2013</td>
                            <td class="py-4 pr-4">
                                <a
                                    href="#"
                                    class="mr-3 text-gray-700 border-b border-gray-600 font-normal hover:text-gray-600"
                                    >Delete</a
                                >
                                <a
                                    href="#"
                                    class="mr-3 text-gray-700 border-b border-gray-600 font-normal hover:text-gray-600"
                                    >Edit</a
                                >
                                <a
                                    href="#"
                                    class="mr-3 text-gray-700 border-b border-gray-600 font-normal hover:text-gray-600"
                                    >Show</a
                                >
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 pr-4">
                                Call Jim and ask about the quote
                            </td>
                            <td class="py-4 pr-4">
                                Systematic characterization and documentatin
                            </td>
                            <td class="py-4 pr-4">23/06/2013</td>
                            <td class="py-4 pr-4">23/06/2013</td>
                            <td class="py-4 pr-4">
                                <a
                                    href="#"
                                    class="mr-3 text-gray-700 border-b border-gray-600 font-normal hover:text-gray-600"
                                    >Delete</a
                                >
                                <a
                                    href="#"
                                    class="mr-3 text-gray-700 border-b border-gray-600 font-normal hover:text-gray-600"
                                    >Edit</a
                                >
                                <a
                                    href="#"
                                    class="mr-3 text-gray-700 border-b border-gray-600 font-normal hover:text-gray-600"
                                    >Show</a
                                >
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 pr-4">
                                Call Jim and ask about the quote
                            </td>
                            <td class="py-4 pr-4">
                                Systematic characterization and documentatin
                            </td>
                            <td class="py-4 pr-4">23/06/2013</td>
                            <td class="py-4 pr-4">23/06/2013</td>
                            <td class="py-4 pr-4">
                                <a
                                    href="#"
                                    class="mr-3 text-gray-700 border-b border-gray-600 font-normal hover:text-gray-600"
                                    >Delete</a
                                >
                                <a
                                    href="#"
                                    class="mr-3 text-gray-700 border-b border-gray-600 font-normal hover:text-gray-600"
                                    >Edit</a
                                >
                                <a
                                    href="#"
                                    class="mr-3 text-gray-700 border-b border-gray-600 font-normal hover:text-gray-600"
                                    >Show</a
                                >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-auto flex gap-12 self-end">
                <span class="cursor-pointer">English</span>
                <span class="cursor-pointer">ქართული</span>
            </div>
        </div>
    </section>
</x-layout>
