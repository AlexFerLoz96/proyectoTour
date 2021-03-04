<link rel="stylesheet" href="assets/css/login.css">
<script src="assets/css/login.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div>
            <div class='box'>
                <div class='box-form'>
                    <div class='box-login-tab'></div>
                    <div class='box-login-title'>
                        <div class='i i-login'></div>
                        <h2>Iniciar sesión</h2>
                    </div>
                    <div class='box-login'>
                        <form method="POST" action="{{ route('login') }}" class='fieldset-body' id='login_form'>
                            @csrf
                            <p class='field'>
                                <!-- Email Address -->
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="user" class="block mt-1 w-full" type="text" title="Username" name="email" :value="old('email')" required autofocus />
                                <span id='valida' class='i i-warning'></span>
                            </p>

                            <!-- Password -->
                            <p class='field'>
                                <x-label for="password" :value="__('Password')" />

                                <input id="pass" class="block mt-1 w-full" title="Password" type="password" name="password" required autocomplete="current-password" />
                                <span id='valida' class='i i-close'></span>
                            </p>
                            <!-- Remember Me -->
                            <label class='checkbox'>
                                <input type='checkbox' value='TRUE' title='Remember me' /> Mantener la sesión iniciada
                            </label>
                            <label class='create'>
                                <a href="/register" title='Sign up now!'> Crear una cuenta</a>
                            </label>
                            <x-button class="ml-3" id='do_login' value='SIGN IN' title='Get Started'>
                                {{ __('SIGN IN') }}
                            </x-button>
                        </form>
                    </div>
                </div>
    </x-auth-card>
</x-guest-layout>