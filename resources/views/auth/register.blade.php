<link rel="stylesheet" href="assets/css/login.css">
<script src="assets/css/login.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>

        <!-- The video -->
        <video autoplay muted loop id="myVideo">
            <source src="/assets/imgs/lugares/login.mp4" type="video/mp4">
        </video>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div>
            <div class='box'>
                <div class='box-form'>
                    <div class='box-login-tab'></div>
                    <div class='box-login-title'>
                        <div class='i i-login'></div>
                        <h2>REGISTRO</h2>
                    </div>
                    <div class='box-login'>
                        <form method="POST" action="{{ route('register') }}" class='fieldset-body' id='login_form'>
                            @csrf
                            <!-- Name -->
                            <p class='field'>
                                <x-label for="name" :value="__('Nombre')" />

                                <x-input id="name" class="block mt-1 w-full" autocomplete="off" type="text" name="name" :value="old('name')" required autofocus />
                            </p>
                            <p class='field'>
                                <!-- Email Address -->
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="user" class="block mt-1 w-full" autocomplete="off" type="text" title="Username" name="email" :value="old('email')" required autofocus />
                                <span id='valida' class='i i-warning'></span>
                            </p>

                            <!-- Password -->
                            <p class='field'>
                                <x-label for="password" :value="__('Contraseña')" />

                                <input id="pass" class="block mt-1 w-full" title="Password" type="password" name="password" required autocomplete="current-password" />
                                <span id='valida' class='i i-close'></span>
                            </p>
                            <!-- Confirm Password -->
                            <p class='field'>
                                <x-label for="password_confirmation" :value="__('Confirmar contraseña')" />

                                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />

                            </p>
                            <x-button class="ml-3" id='do_login' value='SIGN IN' title='Sign up'>
                                {{ __('SIGN UP') }}
                            </x-button>
                        </form>
                    </div>
                </div>
    </x-auth-card>
</x-guest-layout>