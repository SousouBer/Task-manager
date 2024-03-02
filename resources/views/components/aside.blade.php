<aside class="h-full py-8 px-8 flex flex-col bg-gray-100 rounded-xl flex-shrink-0">
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
                            <li class="text-lg text-gray-900">
                                <a href="{{ route('admin_panel') }}">{{ __('admin.my_tasks') }}</a>
                            </li>
                        </div>
                        <div class="flex items-center gap-2 text-lg">
                            <div>
                                <img src="{{ asset('/images/due.png')}}" alt="Due tasks" />
                            </div>
                            <li class="cursor-pointer text-gray-900">
                                
                                <a href="{{ route('admin_panel', ['dueTasks' => true]) }}">{{ __('admin.due_tasks') }}</a>
                            </li>
                        </div>
                        <div class="flex items-center gap-2 text-lg">
                            <div>
                                <img src="{{ asset('/images/profile.png')}}" alt="Profile" />
                            </div>
                            <li class="cursor-pointer text-gray-900">
                               <a href="{{ route('profile') }}"> {{ __('admin.profile') }}</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>             
            <form method="POST" action="{{ route('logout') }}" class="mt-auto">
            @csrf  
            <div class="flex items-center gap-2 ">
                <img src="{{ asset('/images/logout.png')}}" alt="Logout icon" />
                <button class="text-gray-900 text-lg">{{ __('admin.log_out') }}</button>
                
            </div>
            </form>            
        </aside>