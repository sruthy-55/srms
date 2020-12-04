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
                    
                    <h2 class="title">ADD MENU</h2>
                  
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Enter item id" name="itemid">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Enter item name" name="itemname">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="class" >
                                    <option disabled="disabled" selected="selected" >Choose category</option>
                                    <option>GOLGAPPAS</option>
                                    <option>CHEF"S SIGNATURE GOLGAPPAS</option>
                                    <option>POROTTA ROLLS</option>
                                    <option>BOTTLED WONDERS</option>
                                    <option>DESI MACRONIS</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                        <label class="control-label">Select item image</label>
                        <input type="file" name="file"  id="lastName" class="form-control form-control-danger" placeholder="12n">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Add description" name="descri">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                              
                            </div>
                            
                        </div>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Status</option>
                                            <option>Available</option>
                                            <option>Unavailable</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Enter the price" name="price">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit" name="add" >ADD</button>
                            <button class="btn btn--radius btn--green" type="submit" name="update">UPDATE</button>
                            <button class="btn btn--radius btn--green"  type="submit" name="cancel" onclick="window.location.href='/staffprofile'">CANCEL</button>
                            <button class="btn btn--radius btn--green" type="submit" name="view" >VIEW MENU DETAILS</button>
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
<!-- end document-->