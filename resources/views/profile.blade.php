<x-layout>
    <div class="flex flex-col items-center justify-center">
        <x-heading class="mb-14 uppercase">{{
            __("profile.profile")
        }}</x-heading>

        <form
            method="POST"
            action="{{ route('profile.update') }}"
            class="w-2/4"
            enctype="multipart/form-data"
        >
            @csrf @method('PATCH')

            <x-form.input
                name="email"
                type="email"
                disabled="{{ true }}"
                value="{{ auth()->user()->email }}"
                placeholder="{{ __('profile.email') }}"
            />

            <div class="flex flex-col gap-4">
                <div class="flex justify-center items-center py-14">
                    <span class="uppercase">{{
                        __("profile.change_password")
                    }}</span>
                </div>
                <div>
                    <x-form.input
                        name="current_password"
                        type="password"
                        placeholder="{{ __('profile.current_password') }}"
                    />
                    <x-error-message name="current_password" />
                </div>

                <div>
                    <x-form.input
                        name="password"
                        type="password"
                        placeholder="{{ __('profile.new_password') }}"
                    />
                    <x-error-message name="password" />
                </div>

                <div>
                    <x-form.input
                        name="password_confirmation"
                        type="password"
                        placeholder="{{ __('profile.retype_new_password') }}"
                    />
                    <x-error-message name="password_confirmation" />
                </div>
            </div>

            <div class="mb-10">
                <div class="flex justify-center items-center py-14">
                    <span class="uppercase">{{
                        __("profile.change_photos")
                    }}</span>
                </div>
                <div class="flex flex-col gap-10">
                    <x-profile-photo
                        name="profile_picture"
                        src="{{ asset('storage/'.auth()->user()->picture) }}"
                        >{{ __("profile.upload_profile") }}</x-profile-photo
                    >
                    <x-profile-photo
                        name="cover_picture"
                        src="{{ asset('/images/Intersect.png') }}"
                        >{{ __("profile.upload_profile") }}</x-profile-photo
                    >
                </div>
            </div>
            <x-form.button>{{ __("profile.change") }}</x-form.button>
        </form>
    </div>
</x-layout>
