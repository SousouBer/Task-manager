<x-main-layout>
    <section class="flex items-center justify-center">
        <div class="flex items-center justify-center h-screen w-4/5 py-6">
            <div class="flex-1 flex justify-end h-full">
                <img
                    class="self-end h-full"
                    src="{{ Storage::disk('public')->exists('images/cover.png') ? asset('storage/images/cover.png') : asset('images/cover.png') }}"
                    alt="Login cover"
                />
            </div>
            <div
                class="flex-1 flex items-center justify-center flex-col h-screen pb-20"
            >
                <div class="w-4/5 mt-auto">
                    <div class="flex items-center justify-between pb-7">
                        <div>
                            <h1 class="text-4xl font-bold mb-1 uppercase">
                                {{ __('auth.welcome') }}!
                            </h1>
                            <span class="text-base text-gray-600"
                                >{{ __('auth.your_details') }}</span
                            >
                        </div>
                        <div>
                            <img src="{{ asset('/images/Group.png')}}" alt="Smile icon" />
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login.store') }}">
                        @csrf
                        
                        <div class="py-4">
                            <div class="mb-6">
                                <x-form.input required name="email" type="email" labelName="{{__('auth.email')}}" placeholder="{{ __('auth.email_placeholder') }}" />      
                                <x-error-message name="email" />                       
                            </div>
                            <div class="relative">
                                <x-form.input required id="password-input" name="password" type="password" labelName="{{__('auth.password')}}" placeholder="{{ __('auth.password_placeholder') }}" />
                                <div
                                    id="showOrHidePassword"
                                    class="absolute right-0 top-1/2 transform -translate-x-full -translate-y-1/2"
                                >
                                    <img
                                        class="cursor-pointer"
                                        src="{{ asset('/images/eye.png')}}"
                                        alt="Eye icon"
                                    />
                                </div>
                            </div>
                            <x-error-message name="password" />
                            <x-error-message name="invalidInputs" />                                            
                        </div>
                        <x-form.button>{{ __('auth.log_in') }}</x-form.button>
                    </form>
                </div>
            <x-languages />
            </div>
        </div>
    </section>
</x-main-layout>

<script>
    const btn = document.getElementById('showOrHidePassword');
    const inputEl = document.getElementsByTagName('input')[2];
    let showPassword = false;

    btn.addEventListener('click', () => {
        showPassword = !showPassword; 
        inputEl.type = showPassword ? 'text' : 'password';
    })
</script>
