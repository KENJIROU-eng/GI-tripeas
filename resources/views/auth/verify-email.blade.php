<x-guest-layout>
    <div class="bg-amber-100 md:w-1/2  mx-auto h-full p-8">

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{-- {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }} --}}
            <p class="text-4xl font-medium text-center mb-8">{{ __('Thanks for signing up!') }}</p>
            <div class="text-lg">
                <p>{{ __('Before getting started, could you verify your email address by clicking on the link we just emailed to you?') }}</p>
                <p>{{ __(' If you didn\'t receive the email, we will gladly send you another.') }}</p>
            </div>
        </div>

        @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-xl text-green-800 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
        @endif

        <div class="mt-12 flex items-center justify-between text-xl">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-primary-button>
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
