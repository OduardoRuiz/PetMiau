<x-guest-layout>
    <x-auth-card  >
       <x-slot name="logo" >
            <a href="/">

            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
        <h1 class="criarConta">Criar conta</h1>
        <h2 class="completeCampo">Complete os campos com suas informações</h2>
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nome Completo')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirme sua senha')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            <div>
                <x-button class="botaoRegistrar">
                    {{ __('Criar conta') }}
                </x-button>
            </div>
           <div class="flex items-center justify-end ">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Já tem registro? Faça seu login') }}
                </a>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>
