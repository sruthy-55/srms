
<html><body><link rel="stylesheet" href="css/login.css"/>

<a href="\" style="color:white;">Home </a>
<div class="login">
     
	<form class="login-form" action="register2" method="post" id="login">
            @csrf
            <p class="login-text">
             <span class="fa-stack fa-lg">
                  
     <!-- <i class="fa fa-circle fa-stack-2x"></i>-->
                 <i class="fa fa-lock fa-stack-1x"></i>
            </span>
             </p>
        <input type="name" name="txtName" class="login-username" autofocus="true" required="true" placeholder="Name" />
        <input type="text" name="txtAddress" class="login-username" autofocus="true" required="true" placeholder="Address" />
        <input type="email" name="txtEmail" class="login-username" autofocus="true" required="true" placeholder="Email" />
        <input type="text" name="designation" class="login-username" autofocus="true" required="true" placeholder="Designation" />
       
       <!-- <div class="login-username">
        <select name="designation">
        <option disabled="disabled" selected="selected">choose designation</option>
        <option>Chef</option>
        <option>Waiter</option>
        <option>Manager</option>
        </select>
        <div class="select-dropdown"></div>
        </div>
        </div>-->
        <input type="integer" name="txtContact" class="login-username" autofocus="true" required="true" placeholder="Mobile" />
         <input type="password" name="txtPassword" class="login-password" required="true" placeholder="Password" />
        <!-- <input type="password" name="txtCnfmpass" class="login-password" placeholder="Confirm Password" required="true">-->
         <input type="submit" name="register" value="register" class="login-submit" />
          
              <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color:white;" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
               
               <!-- <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>-->
        
    </form>
    </div>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
    

</body>
</html>

