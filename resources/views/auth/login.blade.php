<html><body><link rel="stylesheet" href="css/login.css"/>
<x-guest-layout>
      <!--  <x-jet-validation-errors class="mb-4" />-->

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
            </div>
            @endif
            <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf

<<<<<<< HEAD
            <div  class="mt-4">
                <x-jet-label value="{{ __('Email') }}"/>
=======
            <div>
                <x-jet-label value="{{ __('Email') }}" placeholder="Enter admin email"/>
>>>>>>> 798402e1befb55ec3a3acc3ca775a738dc30a1d6
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span style="color:white;" class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4" class="btn btn-primary">
                    {{ __('Login') }}
                </x-jet-button>
                <div>
                  @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color:blue;" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                  @endif
                </div>

                
            </div>
        </form>
    
</x-guest-layout>
</body>
</html>