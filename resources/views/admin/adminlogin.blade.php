
<html><body><link rel="stylesheet" href="css/customerlogin.css"/>

<!--<html lang="en">-->
<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="customerlogin.css">
  <title>login page</title>
</head>
<body>

  <div class="container">
  <form class="card" action="email1" method="post">
@csrf
<div class="card">
    <h2 class="heading">LOGIN</h2>
  <input type="email" name="email" class="card" autofocus="true" required="true" placeholder="Email" style="color:white"/><br>
  <input type="password" name="password" class="card" required="true" placeholder="Password" /><br>
  <input type="submit" name="Login" value="Login" class="btn" /><br>
  
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
