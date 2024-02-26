<x-layout>
    <div class="flex flex-col items-center justify-center">
        <x-heading class="mb-14 uppercase">{{ __('profile.profile') }}</x-heading>

        <form method="POST" action="#" class="w-2/4">
            <x-form.input name="email" type="email" placeholder="{{ __('profile.email') }}" />

            <div class="flex flex-col gap-4">
                <div class="flex justify-center items-center py-14">
                    <span class="uppercase">{{ __('profile.change_password') }}</span>
                </div>
                <x-form.input
                    name="current-password"
                    type="password"
                    placeholder="{{ __('profile.current_password') }}"
                />
                <x-form.input
                    name="new-password"
                    type="password"
                    placeholder="{{ __('profile.new_password') }}"
                />
                <x-form.input
                    name="retype-password"
                    type="password"
                    placeholder="{{ __('profile.retype_new_password') }}"
                />
            </div>

            <div class="mb-10">
                <div class="flex justify-center items-center py-14">
                    <span class="uppercase">{{ __('profile.change_photos') }}</span>
                </div>
                <div class="flex flex-col gap-10">
                    <x-profile-photo src="{{ asset('/images/avatar.png') }}"
                        >{{ __('profile.upload_profile') }}</x-profile-photo
                    >
                    <x-profile-photo src="{{ asset('/images/Intersect.png') }}"
                        >{{ __('profile.upload_profile') }}</x-profile-photo
                    >
                </div>
            </div>
            <x-form.button>{{ __('profile.change') }}</x-form.button>
        </form>
    </div>
</x-layout>
