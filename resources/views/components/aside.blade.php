<aside class="h-full py-8 px-8 flex flex-col bg-gray-100 rounded-xl">
            <div>
                <div class="flex items-center justify-center mb-20">
                    <div>
                        <img src="{{ asset('/images/avatar.png')}}" alt="Avatar png" />
                    </div>
                </div>
                <div>
                    <ul class="flex flex-col gap-6">
                        <div class="flex items-center gap-2 text-lg">
                            <div>
                                <img src="{{ asset('/images/tasks.png')}}" alt="Tasks" />
                            </div>
                            <li class="text-lg text-gray-900">My tasks</li>
                        </div>
                        <div class="flex items-center gap-2 text-lg">
                            <div>
                                <img src="{{ asset('/images/due.png')}}" alt="Due tasks" />
                            </div>
                            <li class="cursor-pointer text-gray-900">
                                Due tasks
                            </li>
                        </div>
                        <div class="flex items-center gap-2 text-lg">
                            <div>
                                <img src="{{ asset('/images/profile.png')}}" alt="Profile" />
                            </div>
                            <li class="cursor-pointer text-gray-900">
                                Profile
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="flex items-center gap-2 mt-auto">
                <img src="{{ asset('/images/logout.png')}}" alt="Logout icon" />
                <span class="text-gray-900 text-lg cursor-pointer">Log out</span>
            </div>
        </aside>