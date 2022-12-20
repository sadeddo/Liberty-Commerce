
<!DOCTYPE html>
  <html>
    <head>
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/chapeau.jpg')}}">
        <link href="{{asset('css/register.css')}}" rel="stylesheet">
        <title>Register</title>
        <meta charset = "utf-8">
    </head>
    @include('header')
    <body>
     <div class=header>
       
        <h1 class=Inscription>Inscription</h1>
        <p class=pInscription> Inscrivez-vous pour accéder a toutes les Cook Box</p>
        </div>
    
    
    <fieldset>
    
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name:')" /><br><br>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email:')" /><br>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password:')" /><br>

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password:')" /><br>

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a><br>

                <x-button class="ml-4">
                    {{ __('Register') }}
                     
                </x-button>
            </div>
        </form>
</fildest>
</body> 
@include('footer')
  
 </html>
