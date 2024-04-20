<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo" >
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600" style="margin-top: 115px">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum labore ex ea architecto adipisci eligendi non laudantium asperiores ratione. Nesciunt tempore sunt quam, sint deserunt quidem fugit sed quia labore.
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, impedit nam veritatis quis et placeat ea adipisci, eos maxime cum accusamus numquam, id nulla ipsa in. Facere ducimus adipisci fugit!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nemo. Quidem iusto quibusdam, possimus, ea nihil, vero quae hic dicta ad ab labore? Optio dolorem quos, iusto fugiat atque distinctio!
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
