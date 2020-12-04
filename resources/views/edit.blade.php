<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
   

    <!-- Title Page-->
    <title>SRMS</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    
    
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">   
            <div class="card card-2">  
                <div class="card-heading"></div>
                <div class="card-body">
                    
                    <h2 class="title">EDIT CATEGORY</h2>
                    <form action="edit" method="POST">
                    @csrf
                        <input type="hidden" name="id" value="{{$data['id']}}">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Enter category name" name="name" value="{{$data['name']}}">
                        </div>
                        
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit" >UPDATE</button>
                            <button class="btn btn--radius btn--green"  type="submit" name="cancel" onclick="window.location.href='/viewcategorylist'">CANCEL</button>
                         <!-- <button class="btn btn--radius btn--green" type="submit" name="view" >VIEW  CATEGORIES</button>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

