<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{asset('/img/curio-01-zwart-logo-rgb.png')}}" width="200" alt="Curio Logo">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" maxlength="22" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" maxlength="40" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" maxlength="40" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Choose Role -->
            <div class="mt-4"> <x-label>Ik ben een:</x-label></div>
            <div class="reg-radio-main" style="display: flex; flex-direction: row; justify-content: flex-start; padding-top: 10px;">
                <div class="reg-radio-flex" style="display: flex; align-items: center; padding-right: 85px;">
                    <input type="radio" id="user" name="action" value="user" required>
                    <label style="padding-left: 3px;" for="user">Leerling</label>
                </div>
                <div class="reg-radio-flex" style="display: flex; align-items: center;">
                    <input type="radio" id="opdrachtgever" name="action" value="opdrachtgever" required>
                    <label style="padding-left: 3px;" for="opdrachtgever">Opdrachtgever</label>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
