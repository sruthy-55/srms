<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/stylenew.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
    <title>SRMS</title>
</head>
<body>

<div class="row">
			
			<div class="col s2 left-sidebar" id="left-sidebar">

				<div class="row">
					<div class="col">
						<h4 class="heading-name">GOALGAPPAS</h4>
					</div>
				</div>
				<ul class="nav nav-sidebar list-group" class="nav-wrapper">
				    <li class="list-group-item active"><a href='/foodlist'>Menu </a></li>
					<li class="list-group-item"><a href='/add'>Add category</a></li>
				    <!--<li class="list-group-item"><a href="category-list.php">Category</a></li>-->
					<li ><a href='/orderlist'>View Todays Order</a></li>
					<li class="list-group-item active" ><a href="/foodmenu">foodMenu </a></li>
					<li class="list-group-item active" ><a href="/tblmanage">manage table </a></li>
					<li class="list-group-item active" ><a href="/adminapprove">Approve Reservation </a></li>
					<li class="list-group-item active" ><a href="/menus">Add Menu</a></li>


				    <!--<li class="list-group-item"><a href='/orderlist'>View Todays Order</a></li>-->
				    <li class="list-group-item modal-trigger" data-target="modal1"><a href='/tblreserved'>View Reserved Table</a></li>
				  </ul>
			</div>

			<div class="col s10" id="topnav">
				<nav>
				    <div class="nav-wrapper">
				      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				      <ul class="right hide-on-med-and-down">
				        <li><a href='/adminhome'>My Profile</a></li>
				        <li><a href="../">Home</a></li>
				       <!-- <li data-target="modal1" class="modal-trigger"><a href="#">About</a></li>-->
				        <li><a href='/adminlogout'>Logout</a></li>
				      </ul>
				    </div>
				  </nav>

				  <!--<ul class="sidenav" id="mobile-demo">
				    <li><a href="food-list.php">Foods</a></li>
			        <li><a href="category-list.php">Category</a></li>
			        <li><a href="order-list.php">Orders</a></li>
			        <li data-target="modal1" class="modal-trigger"><a href="#">About</a></li>
			        <li><a href="logout.php">Logout!</a></li>
				  </ul>-->


		<div class="container">
				<div class="row maincontent">
					<div class="col s12 center">

					
<!--<div class="section white-text center" style="background: #B35458; margin-top: 20px;">

	<h4>Dashboard</h4>
	
	<div class="row" style="padding: 50px;">
		<div class="col s10">

			<a class="dash-btn" href="food-list.php"><div class="sec white white-text" style="margin: 15px; padding: 40px;border: 2px solid white; border-radius: 20px; font-size: 20px; background: linear-gradient(to right, #AF6568, #FA797F);">Foods</div></a>
			<a class="dash-btn" href="category-list.php"><div class="sec white white-text" style="margin: 15px; padding: 40px;border: 2px solid white; border-radius: 20px; font-size: 20px; background: linear-gradient(to right, #AF6568, #FA797F);">Categories</div></a>
			<a class="dash-btn" href="order-list.php"><div class="sec white white-text" style="margin: 15px; padding: 40px;border: 2px solid white; border-radius: 20px; font-size: 20px; background: linear-gradient(to right, #AF6568, #FA797F);">Orders</div></a>

		</div>

	</div>

</div>-->






</div>
	</div>
		</div>
			</div>
		</div>
	    <script
		  src="https://code.jquery.com/jquery-3.4.1.min.js"
		  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		  crossorigin="anonymous"></script>

	    <!-- Compiled and minified JavaScript -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	    <script src="../js/loader_admin.js"></script>
</body>
</html>