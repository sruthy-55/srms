<h1>selectmenu</h1>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title> Online Food Delivery Form </title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" type="text/css">
    <link href="custom.css" rel="stylesheet" type="text/css">

    <script>
        function finalCost(){
            var foodItem = document.getElementById("food_item").value;
            var specialItemm = document.getElementById("special_item").value;
            var foodQuatity = document.getElementById("food_quantity").value;
            var deliveryType = document.getElementById("delivery_type").value;
            var deliveryArea = document.getElementById("delivery_area").value;

            var all_food = (parseInt(foodItem)*7) + (parseInt(specialItemm)*3) + ((foodQuatity)*2) + (parseInt(deliveryType)*4) + (parseInt(deliveryArea)*3)
            document.getElementById("result").innerHTML = all_food;
        }
        function ok_result(){
            document.getElementById("okResult").style.display="block";
            document.getElementById("okResult").style.backgroundColor="#DCE775";
            document.getElementById("input_box").style.display="none";
        }
    </script>

</head>
<body>
      <div class="online_food_delivery_box animated bounceInDown" id="input_box">
          <h3> Online Food Delivery Form </h3><br>
          <form>
              <div class="form-group">
                  <select class="form-control" id="food_item" onchange="finalCost()">
                      <option value="0"> Select Food Item ... </option>
                      <option value="1"> Spring Roll </option>
                      <option value="2"> Fried Prawn </option>
                      <option value="3"> Thai Fried Chicken Wings  </option>
                      <option value="4"> Cutlet Chicken </option>
                      <option value="5"> Cutlet Beef  </option>
                      <option value="6"> Thai Mixed Noodles  </option>
                      <option value="7"> Thai Beef With Ginger </option>
                  </select>
              </div>
              <div class="form-group">
                  <select class="form-control" id="special_item" onchange="finalCost()">
                      <option value="0"> Want Special Item ?</option>
                      <option value="2"> Yes </option>
                      <option value="0"> No </option>
                  </select>
              </div>
              <div class="form-group">
                  <input type="number" class="form-control" id="food_quantity" placeholder="Quantity" onkeyup="finalCost()" >
              </div>
              <div class="form-group">
                  <select class="form-control" id="delivery_type" onchange="finalCost()">
                      <option value="0"> Delivery Type - </option>
                      <option value="0"> Normal </option>
                      <option value="2"> Emergency </option>
                  </select>
              </div>
              <div class="form-group">
                  <select class="form-control" id="delivery_area" onchange="finalCost()">
                      <option value="0"> Select Delivery Area ... </option>
                      <option value="1"> Dhanmondi </option>
                      <option value="2"> Gulshan </option>
                      <option value="3"> Mohammadpur  </option>
                      <option value="4"> Uttara </option>
                      <option value="5"> Mirpur  </option>
                      <option value="6"> Banani  </option>
                      <option value="7"> Magbazar </option>
                  </select>
              </div><br>
              <div class="form-group">
                  <label>Total Cost ($) : </label>
                  <span id="result" style="background-color: #8c7269;color: #fff;padding: 6px 70px;font-weight: 600;font-size: 18px; margin-left: 10px;border-radius: 5px;">0</span>
                  <input type="button" value="SUBMIT" class="btn btn-primary" style="float: right" id="ok" onclick="ok_result()">
              </div>
          </form>
      </div>

      <div class="result_box animated zoomIn" style="display: none;" id="okResult">
          <h3 class="result_box_text" id="ok_text"> Your order is successfully submitted. Please keep patience, we will come to you soon.<br><br><span> --  Thank You  -- </span></h3><br>
      </div>

</body>
</html>