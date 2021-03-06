<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">

            </a>
        </x-slot>
        <img src="https://storage.googleapis.com/petmiau-imagens/front-end/bemvindodevolta.png" alt="logo do pet miau com a frase bem vindo novamente" class="imagemLogin">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
        <h1 class="cadastro">Não tem cadastro? 
            <a class="registreLogin" href="{{ route('register') }}">Registre-se</a>
        </h1>
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Mantenha-me conectado') }}</span>
                </label>
            </div>

           <!-- <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif -->

                <x-button class="botaoEntrar">
                    {{ __('Entrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
