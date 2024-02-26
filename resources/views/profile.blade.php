<x-layout>
    <div class="flex flex-col items-center justify-center">
        <x-heading class="mb-14">PROFILE</x-heading>

        <form method="POST" action="#" class="w-2/4">
            <x-form.input name="email" type="email" placeholder="E-mail" />

            <div class="flex flex-col gap-4">
                <div class="flex justify-center items-center py-14">
                    <span>CHANGE PASSWORD</span>
                </div>
                <x-form.input
                    name="current-password"
                    type="password"
                    placeholder="Current password"
                />
                <x-form.input
                    name="new-password"
                    type="password"
                    placeholder="New password"
                />
                <x-form.input
                    name="retype-password"
                    type="password"
                    placeholder="Retype new password"
                />
            </div>

            <div class="mb-10">
                <div class="flex justify-center items-center py-14">
                    <span>CHANGE PHOTOS</span>
                </div>
                <div class="flex flex-col gap-10">
                    <x-profile-photo src="{{ asset('/images/avatar.png') }}"
                        >UPLOAD PROFILE</x-profile-photo
                    >
                    <x-profile-photo src="{{ asset('/images/Intersect.png') }}"
                        >UPLOAD COVER</x-profile-photo
                    >
                </div>
            </div>
            <x-form.button>CHANGE</x-form.button>
        </form>
    </div>
</x-layout>
