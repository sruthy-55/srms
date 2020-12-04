<html><body><link rel="stylesheet" href="css/customerlogin.css"/>

<!--<html lang="en">-->
<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="customerlogin.css">
  <title>login page</title>
</head>
<body>

  <div class="container">
  <form class="card" action="email" method="post">
@csrf
    <div class="card">
    <h2 class="heading">LOGIN</h2>
    <input type="email" name="email" class="card" required="true" autofocus="true" required="true" placeholder="Email" /><br>
  <input type="password" name="password" class="card" required="true" placeholder="Password" /><br>
  <input type="submit" name="Login" value="Login" class="btn" />
  <div><a href="register" style="color:white;">sign up </a> /
    @if (Route::has('password.request'))
      <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color:white;" href="{{ route('password.request') }}">
       {{ __('Forgot password?') }}
     </a>
    @endif
  </div>
</form>
<!--<a href="#" class="login-forgot-pass">forgot password?</a>-->

<!--<div class="underlay-photo"></div>
<div class="underlay-black"></div>-->

<<<<<<< HEAD
</body>
</html>
      <!--<h2 class="heading">LOGIN</h2>
      <input type="text" placeholder="username">
      <br>
      <input type="password" placeholder="password">
      <br>
      <input type="button" value="login" class="btn">
    </div>
  </div>
</body>

</html>-->

=======
            <div  class="mt-4">

                <x-jet-label value="{{ __('Email') }}" />
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


                <x-jet-button class="ml-4">
                
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
>>>>>>> 798402e1befb55ec3a3acc3ca775a738dc30a1d6
