<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>event</title>
    <link rel="stylesheet" href="css/style2.css">
    <link href='https://css.gg/calendar-dates.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
<div class="container">
  <div class="navbar">
  <nav>
    </nav>
  </div>
</div>

<div class="small-container">
<div class="row-2">
  <img src="img/cover.jpg">
</div>
 <div class="row">
   <div class="col-4">
     <a href="productDetails.php"><img src="img/1.jpg"></a>
       <a href="productDetails.php">
         <h4>beach cleanup with friends organized by habitat friends</h4></a>
         <a><i class="fa fa-calendar"></i> 13th Augest</a><br>
         <a><i class="fa fa-clock-o" ></i> 4.00P.M - 6.00P.M</a><br>
         <a><i class="fa fa-users"></i> 12 seats </a>
     <p>LKR 2,000</p>
  </div>
  <div class="col-4">
    <img src="img/2.jpg">
      <h4>beach cleanup with friends organized by habitat friends</h4>
      <a><i class="fa fa-calendar"></i> 13th Augest</a><br>
      <a> <a><i class="fa fa-clock-o" ></i> 4.00P.M - 6.00P.M</a><br>
      <a><i class="fa fa-users"></i> 12 seats </a>
    <p>FREE</p>
 </div>
 <div class="col-4">
   <img src="img/1.jpg">
     <h4>beach cleanup with friends organized by habitat friends </h4>
     <a><i class="fa fa-calendar"></i> 13th Augest</a><br>
     <a> <a><i class="fa fa-clock-o" ></i> 4.00P.M - 6.00P.M</a><br>
     <a><i class="fa fa-users"></i> 12 seats </a>
   <p>LKR 2,000</p>
</div>
<div class="col-4">
  <img src="img/2.jpg">
    <h4>beach cleanup with friends organized by habitat friends </h4>
    <a><i class="fa fa-calendar"></i> 13th Augest</a><br>
    <a> <a><i class="fa fa-clock-o" ></i> 4.00P.M - 6.00P.M</a><br>
    <a><i class="fa fa-users"></i> 12 seats </a>
  <p>FREE</p>
</div>
</div>
</div>
<!----------js for toggle menu--------------->
<script>
  var MenuItems = document.getElementById("MenuItems");

  MenuItems.style.maxHeight = "0px";

  function menutoggle(){
    if(  MenuItems.style.maxHeight == "0px")
    {
        MenuItems.style.maxHeight = "200px"
    }
    else
    {
        MenuItems.style.maxHeight = "0px"
    }
  }
</script>







  </body>
</html>
