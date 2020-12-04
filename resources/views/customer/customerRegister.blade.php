
<html><body><link rel="stylesheet" href="css/register.css"/>

<div class="container">
 
<div class="icon2">
  <p class="name">REGISTER</p>
  <form class="a" action="register" method="post"  >
  @csrf
   <div class="icon2"> 
    <input type="name" name="txtName" autofocus="true" required="true" placeholder="Name" /><br>
        <input type="text" name="txtPlace" autofocus="true" required="true" placeholder="Place" /><br>
        <input type="email" name="txtEmail"  autofocus="true" required="true" placeholder="Email" /><br>
        <input type="integer" name="txtContact" autofocus="true" required="true" placeholder="Mobile" /><br>
         <input type="password" name="txtPassword"  required="true" placeholder="Password" /><br>
         <input type="submit" name="register" value="register" class="btn2"/><br>
         <a class="account" style="color:blue;" href="{{ route('login') }}">
                 
               <!-- <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>-->
         <div class="hr">
           <hr class="left">
           <span id="c">or</span>
           <hr class="right">
           {{ __('Already registered??Login') }}
                </a>
               
</div>
       
</div>
</div>
</form>    
</body>
</html>