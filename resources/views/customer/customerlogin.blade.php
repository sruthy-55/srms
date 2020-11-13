
<html><body><link rel="stylesheet" href="css/login.css"/>
<a href="\" style="color:white;">Home </a>
<form class="login-form" action="email" method="post">
@csrf
  <p class="login-text">
    <span class="fa-stack fa-lg">
     <!-- <i class="fa fa-circle fa-stack-2x"></i>-->
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>

  <input type="email" name="email" class="login-username" autofocus="true" required="true" placeholder="Email" />
  <input type="password" name="password" class="login-password" required="true" placeholder="Password" />
  <input type="submit" name="Login" value="Login" class="login-submit" />
  <div><a href="register" style="color:white;">sign up </a> /
    @if (Route::has('password.request'))
      <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color:white;" href="{{ route('password.request') }}">
       {{ __('Forgot your password?') }}
     </a>
    @endif
  </div>
</form>
<!--<a href="#" class="login-forgot-pass">forgot password?</a>-->

<div class="underlay-photo"></div>
<div class="underlay-black"></div>

</body>
</html>
