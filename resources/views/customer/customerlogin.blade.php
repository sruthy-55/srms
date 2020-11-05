<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>SRMS</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Pickadate CSS -->
    <link rel="stylesheet" href="css/classic.css">    
    <link rel="stylesheet" href="css/classic.date.css">    
    <link rel="stylesheet" href="css/classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/goal.jpg" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href='/'>Home</a></li>
						<li class="nav-item"><a class="nav-link" href='/menu'>Menu</a></li>
						<li class="nav-item"><a class="nav-link" href='/about'>About</a></li>
						<li class="nav-item active"><a class="nav-link" href='/home'>Customer</a></li>
						<li class="nav-item active dropdown">
							
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">blog</a>
								<a class="dropdown-item" href="blog-details.html">blog Single</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href='/contact'>Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

<body>
    <!-- Start header -->
    
    <!-- End header -->
<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>LOGIN</h1>
                    
                </div>
            </div>
            
            
    <x-guest-layout>
        <x-jet-validation-errors class="mb-4" />

       
            <div class="mb-4 font-medium text-sm text-green-600">
             
            </div>
      
            <form action="email" method="post" >
            @csrf

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