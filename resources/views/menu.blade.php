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
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="welcome.blade.php">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href='/'>Home</a></li>
						<li class="nav-item active"><a class="nav-link" href='/menu'>Menu</a></li>
						<li class="nav-item"><a class="nav-link" href='/about'>About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Login</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">

								<a class="dropdown-item" href='/admin.adminlogin'>Admin</a>

								<a class="dropdown-item" href="stuff.html">Staff</a>
								<a class="dropdown-item" href='/gallery'>Customer</a>
							</div>
						</li>
						<!--<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">blog</a>
								<a class="dropdown-item" href="blog-details.html">blog Single</a>
							</div>
						</li>-->
						<li class="nav-item"><a class="nav-link" href='/contact'>Feedback</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Our Menu</h1>
					<p></p>
					<P>"LIKE NEVER BEFORE"</p>
					<p>'At Goal Gappas, we believe in Redefining Authenticity.We serve you Golgappas like you've never had before in many non veg and veg avatars.Between don't miss out on our special Porotta Rolls,Shakes and Desi Macronis. And to top it all, we have our own to-die-for golgappa deserts...'
</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div class="menu-box" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>-->
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">GOLGAPPAS</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">CHEF"S SIGNATURE GOLGAPPAS</</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">POROTTA ROLLS</a>
						<a class="nav-link" id="v-pills-settings1-tab" data-toggle="pill" href="#v-pills-settings1" role="tab" aria-controls="v-pills-settings1" aria-selected="false">BOTTLED WONDERS</a>
						<a class="nav-link" id="v-pills-settings2-tab" data-toggle="pill" href="#v-pills-settings2" role="tab" aria-controls="v-pills-settings2" aria-selected="false">DESI MACRONIS</a>

					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/arabicgolgappa.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Arabic Golgappa</h4>
											<p>Filled with pan grilled chicken with mayonnaise</p>
											<h5>99/-</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/chickengolgappa.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Chicken Golgappa</h4>
											<p>Filled with chicken in spicy naadan flavours</p>
											<h5>99/-</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/chinesegolgappa.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Chinese Golgappa</h4>
											<p>Filled with fried chicken dipped in saucy flavours</p>
											<h5>99/-</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/Beefgolgappa.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Beef Golgappa</h4>
											<p>Filled with beef in spicy naadan flavours</p>
											<h5> 99/-</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/paneergolgappa.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Paneer Golgappa </h4>
											<p>Filled with grilled paneer in buttery spicy combination</p>
											<h5> 79/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/25.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Zebra Shots</h4>
											<p>The retro Baw golgappas served with multi-layered desert shots</p>
											<h5>179/-</h5>
										</div>
									</div>
								</div>
								
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/Clichegolgappa.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Cliche' Shots</h4>
											<p>Cliche golgappas, but served with Lal Pani shots</p>
											<h5>49/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/bhuttashots.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bhutta Shots</h4>
											<p>Filled with juicy corn balls mixed in chefs' secret masala served with our own Lal Pani Shots</p>
											<h5>89/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/minusdegree.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Minus Degree</h4>
											<p>Mouth freezing choco dipped puris,over loaded with icecreams,nuts and dry fruits.</p>
											<h5>169/-</h5>
										</div>
									</div>
								</div>
								
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/dosthithadppas.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Dosthi Thadppas</h4>
											<p>Indulge together in gulping all varieties of our golgappas Ideal for a gang of 4(Add 31 to get full-jar Naranga Vellam)</p>
											<h5>369/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/12.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Chicken Churuttikootiyathu</h4>
											<h5>89/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/churutt1.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Beef Churuttikootiyathu</h4>
											<h5>88/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/19.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Veg Churuttikootiyathu</h4>
											<h5>87/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/blackcloud1.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Black Cloud</h4>
											<h5>129/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/gymshake.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Gym Shake</h4>
											<h5>119/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/kheershake.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Kheer Shake</h4>
											<h5>89/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/polashake.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pola Shake</h4>
											<h5>79/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/pinkbeauty.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pink Beauty</h4>
											<h5>69/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/limewater.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Naranga Vellam</h4>
											<h5>19/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/chimac.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Chi-Mac</h4>
											<h5>99/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/bemac.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Be-Mac</h4>
											<h5>89/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/13.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Ve-Mac</h4>
											<h5>79/-</h5>
										</div>
									</div>
								</div>


							</div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="row">
							<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/arabicgolgappa.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Arabic Golgappa</h4>
											<p>Filled with pan grilled chicken with mayonnaise</p>
											<h5>99/-</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/chickengolgappa.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Chicken Golgappa</h4>
											<p>Filled with chicken in spicy naadan flavours</p>
											<h5>99/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/chinesegolgappa.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Chinese Golgappa</h4>
											<p>Filled with fried chicken dipped in saucy flavours</p>
											<h5>99/-</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-5 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/Beefgolgappa.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Beef Golgappa</h4>
											<p>Filled with beef in spicy naadan flavours</p>
											<h5> 99/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/paneergolgappa.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Paneer Golgappa </h4>
											<p>Filled with grilled paneer in buttery spicy combination</p>
											<h5> 79/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-5 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/bhuttashots.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bhutta Shots</h4>
											<p>Filled with juicy corn balls mixed in chefs' secret masala served with our own Lal Pani Shots</p>
											<h5>89/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-5 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/Clichegolgappa.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Cliche' Shots</h4>
											<p>Cliche golgappas, but served with Lal Pani shots</p>
											<h5>49/-</h5>
										</div>
									</div>
								</div>
								

								<!--<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-03.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Drinks 3</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $10.79</h5>
										</div>
									</div>
								</div>-->
							</div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="row">
							<div class="col-lg-5 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/minusdegree.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Minus Degree</h4>
											<p>Mouth freezing choco dipped puris,over loaded with icecreams,nuts and dry fruits.</p>
											<h5>169/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-5 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/25.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Zebra Shots</h4>
											<p>The retro Baw golgappas served with multi-layered desert shots</p>
											<h5>179/-</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/dosthithadppas.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Dosthi Thadppas</h4>
											<p>Indulge together in gulping all varieties of our golgappas Ideal for a gang of 4(Add 31 to get full-jar Naranga Vellam)</p>
											<h5>369/-</h5>
										</div>
									</div>
								</div>
								<!--<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-04.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Lunch 1</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $15.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-05.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Lunch 2</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $18.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-06.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Lunch 3</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $20.79</h5>
										</div>
									</div>
								</div>-->
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/12.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Chicken Churuttikootiyathu</h4>
											<h5>89/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/churutt1.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Beef Churuttikootiyathu</h4>
											<h5>88/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/19.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Veg Churuttikootiyathu</h4>
											<h5>87/-</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
				
						<div class="tab-pane fade" id="v-pills-settings1" role="tabpanel" aria-labelledby="v-pills-settings1-tab">
							<div class="row">
							<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/blackcloud.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Black Cloud</h4>
											<h5>129/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/gymshake.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Gym Shake</h4>
											<h5>119/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/kheershake.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Kheer Shake</h4>
											<h5>89/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/polashake.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pola Shake</h4>
											<h5>79/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/pinkbeauty.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pink Beauty</h4>
											<h5>69/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/limewater.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Naranga Vellam</h4>
											<h5>19/-</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings2-tab">
							<div class="row">
							<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/chimac.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Chi-Mac</h4>
											<h5>99/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/bemac.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Be-Mac</h4>
											<h5>89/-</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/13.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Ve-Mac</h4>
											<h5>79/-</h5>
										</div>
									</div>
								</div>
							</div>
						</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
				
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Dinesh Kumar</strong></h5>
								<p class="m-0 pt-3">Innovation, Unique & Absolutely Mind Boggling Taste
</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Shyam Kurup </strong></h5>
								<!--<h6 class="text-dark m-0">Web Designer</h6>-->
								<p class="m-0 pt-3">Best wishes for goal gappas..knowing the team behind I can only imagine some very creative and tasty treats.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Sajar </strong></h5>
								
								<p class="m-0 pt-3">Best coffee · Best brunch · Cheap eats · Cosy atmosphere · Relaxing atmosphere · Convenient location · Popular with locals · Formal tea</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
						097460 40561

						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							yourmail@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
						24-463/7, Sankarayya Rd, opp. Achuthamenon Park, West Fort, Sreenagar Colony, Thrissur, Kerala 680667
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>From Goal Gappas</h3>
					<p>
'At Goal Gappas, we believe in Redefining Authenticity.We serve you Golgappas like you've never had before in many non veg and veg avatars.Between don't miss out on our special Porotta Rolls,Shakes and Desi Macronis. And to top it all, we have our own to-die-for golgappa deserts...'
Profiles</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">24-463/7, Sankarayya Rd, opp. Achuthamenon Park, West Fort, Sreenagar Colony, Thrissur, Kerala 680667</p>
					<p class="lead"><a href="#"> 097460 40561</a></p>
					<!--<p><a href="#"> info@admin.com</a></p>-->
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>1pm - 9pm </p>
					<p><span class="text-color">Tue-Wed :</span> 1pm - 9pm</p>
					<p><span class="text-color">Thu-Fri :</span>1pm - 9pm</p>
					<p><span class="text-color">Sat-Sun :</span> 1pm - 9pm</p>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!--<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Live Dinner Restaurant</a> Design By : 
					<a href="https://html.design/">html design</a></p>-->
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>