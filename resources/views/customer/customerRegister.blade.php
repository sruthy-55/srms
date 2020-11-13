
<html><body><link rel="stylesheet" href="css/login.css"/>

<a href="\" style="color:white;">Home </a>
	<form class="login-form" action="register" method="post" >
            @csrf
            <p class="login-text">
             <span class="fa-stack fa-lg">
     <!-- <i class="fa fa-circle fa-stack-2x"></i>-->
                 <i class="fa fa-lock fa-stack-1x"></i>
            </span>
             </p>
        <input type="name" name="txtName" class="login-username" autofocus="true" required="true" placeholder="Name" />
        <input type="text" name="txtPlace" class="login-username" autofocus="true" required="true" placeholder="Place" />
        <input type="email" name="txtEmail" class="login-username" autofocus="true" required="true" placeholder="Email" />
        <input type="integer" name="txtContact" class="login-username" autofocus="true" required="true" placeholder="Mobile" />
         <input type="password" name="txtPassword" class="login-password" required="true" placeholder="Password" />
         <input type="submit" name="register" value="register" class="login-submit" />
          
              <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color:white;" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
               
               <!-- <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>-->
        
    </form>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
    

</body>
</html>

