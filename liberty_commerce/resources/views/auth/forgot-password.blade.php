@extends('layout')
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/chapeau.jpg')}}">
        <link href="{{asset('css/reset.css')}}" rel="stylesheet">
        <title>réinitialisation</title>
        <meta charset = "utf-8">
    </head>
    
    <body>
        @section('contenu')
    <div class=header>
        
        <h1 class=réinitialisation>réinitialisation </h1>
        </div>
        <fieldset>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email:')" /><br>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
</fieldset>
@endsection
</body>

</html>
