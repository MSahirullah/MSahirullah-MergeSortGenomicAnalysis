<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('SMS Portal Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your SMS portal's sms information.") }}
        </p>
    </header>

    @if (session('status') === 'sms-details-updated')
        <div class="flex items-center p-4 my-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Success!</span> {{ __('Saved.') }}
            </div>
        </div>
    @endif

    <form method="post" action="{{ route('sms-settings.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div>
            <x-input-label for="login_username" :value="__('User Name')" />
            <x-text-input id="login_username" name="login_username" type="text" class="mt-1 block w-full"
                :value="old('login_username', $sms->login_username ?? '')" required autofocus autocomplete="login_username" />
            <x-input-error class="mt-2" :messages="$errors->get('login_username')" />
        </div>

        <div>
            <x-input-label for="login_password" :value="__('Password')" />
            <x-text-input id="login_password" name="login_password" type="text" class="mt-1 block w-full"
                :value="old('login_password', $sms->login_password ?? '')" required autofocus autocomplete="login_password" />
            <x-input-error class="mt-2" :messages="$errors->get('login_password')" />
        </div>

        <div>
            <x-input-label for="access_token" :value="__('Access Token')" />
            <x-text-input id="access_token" name="access_token" type="text" class="mt-1 block w-full"
                :value="old('access_token', $sms->access_token ?? '')" required autofocus autocomplete="access_token" />
            <x-input-error class="mt-2" :messages="$errors->get('access_token')" />
        </div>

        <div>
            <x-input-label for="refresh_token" :value="__('Refresh Token')" />
            <x-text-input id="refresh_token" name="refresh_token" type="text" class="mt-1 block w-full"
                :value="old('refresh_token', $sms->refresh_token ?? '')" required autofocus autocomplete="refresh_token" />
            <x-input-error class="mt-2" :messages="$errors->get('refresh_token')" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

        </div>
    </form>


</section>
