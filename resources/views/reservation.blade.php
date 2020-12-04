
<!DOCTYPE html>

<html><body><link rel="stylesheet" href="css/login.css"/>

<a href="\" style="color:white;">Home </a>
<div class="login">
	<form class="login-form" action="tblreserve" method="post" id="login" >
            @csrf
            <p class="login-text">
             <span class="fa-stack fa-lg">
     <!-- <i class="fa fa-circle fa-stack-2x"></i>-->
                 <i class="fa fa-lock fa-stack-1x"></i>
            </span>
             </p>
             <input type="date" name="txtdate" class="login-username" autofocus="true" required="true" placeholder="Date" />    
             <input type="time" name="txtTime" class="login-username" autofocus="true" required="true" placeholder="Time" />
             <input type="integer" name="txtNum" class="login-username" autofocus="true" required="true" placeholder="No:of people" />
        <input type="name" name="txtName" class="login-username" autofocus="true" required="true" placeholder="Name" />
       
        <input type="email" name="txtEmail" class="login-username" autofocus="true" required="true" placeholder="Email" />
        <input type="integer" name="txtContact" class="login-username" autofocus="true" required="true" placeholder="Mobile" />
      
         <input type="submit" name="Book Now" value="reserve" class="login-submit" />
          
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