<?php
include_once 'db.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $email = $_POST['email'];
     $mob_no = $_POST['mob_no'];
	 $address = $_POST['address'];
	 $city = $_POST['city'];
	 $state = $_POST['state'];
	 $pin_code = $_POST['pin_code'];
	 
	 $sql = "INSERT INTO `address`( `first_name`, `last_name`, `email`, `mob_no`, `address`, `city`, `state`, `pin_code`) VALUES ('$first_name','$last_name','$email','$mob_no','$address','$city','$state','$pin_code')";
	 if (mysqli_query($con, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Address Page</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="address-styles.css ">
    <!-- font awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js">

    </script>
    <!-- bootstrap script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  </head>
  <body>
  <section id="navbar">
    <!--   Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark topnavbar  navbar-collapse">
      <p class="text">Get your Favourite Shooz..</p>

          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav margin ml-auto">
              <li class="nav-item ">
                <a class="nav-link " href="#" style="color:#323232"><i class="fas fa-mobile-alt icons"></i><p class="toptext">Get App</p></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color:#323232"><i class="fas fa-gift icons"></i><p class="toptext">Gift Cards</p></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color:#323232"><i class="fas fa-question-circle icons"></i><p class="toptext tophelp">Help</p></a>
              </li>
            </ul>
          </div>

  </nav>
<!--Second Navbar-->

      <nav  class="navbar navbar-expand-lg navbar-light bg-light secondnavbar">

          <a class="navbar-brand" href="#">

       <img class='image logoimage'src="images/icon.png" width="50" height="50" alt=""></a>

         <a class="navbar-brand logotext" href="#" style="color:#fe346e ">myShooz</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

          </button>

<!--Mega Menu-->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown menu-area">
                <a class="nav-link dropdown-toggle" href="#" id="mm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  CATEGORIES
                </a>
                <div class="dropdown-menu mega-area" aria-labelledby="mm">
                  <div class="row">
                    <div class="col-sm-6 col-lg-3">
                      <h5>Category 1</h5>
                      <a href="" class="dropdown-item">Casual Shoes</a>
                      <a href="" class="dropdown-item">Formal Shoes</a>
                      <a href="" class="dropdown-item">Sports Shoes</a>
                      <a href="" class="dropdown-item">Sock</a>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <h5>Category 2</h5>
                      <a href="" class="dropdown-item">Casual Shoes</a>
                      <a href="" class="dropdown-item">Formal Shoes</a>
                      <a href="" class="dropdown-item">Sports Shoes</a>
                      <a href="" class="dropdown-item">Sock</a>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <h5>Category 3</h5>
                      <a href="" class="dropdown-item">Casual Shoes</a>
                      <a href="" class="dropdown-item">Formal Shoes</a>
                      <a href="" class="dropdown-item">Sports Shoes</a>
                      <a href="" class="dropdown-item">Sock</a>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <h5>Category 4</h5>
                      <a href="" class="dropdown-item">Casual Shoes</a>
                      <a href="" class="dropdown-item">Formal Shoes</a>
                      <a href="" class="dropdown-item">Sports Shoes</a>
                      <a href="" class="dropdown-item">Sock</a>
                    </div>
                  </div>
              </li>


                <li class="nav-item dropdown menu-area">
                  <a class="nav-link dropdown-toggle" href="#" id="mm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    BRANDS
                  </a>
                  <div class="dropdown-menu mega-area" aria-labelledby="mm">
                    <div class="row ">
                      <div class="col-sm-6 col-lg-3 no-highlight">
                        <h5>Brand 1</h5>
                        <a href="" class="dropdown-item ">Casual Shoes</a>
                        <a href="" class="dropdown-item ">Formal Shoes</a>
                        <a href="" class="dropdown-item">Sports Shoes</a>
                        <a href="" class="dropdown-item">Sock</a>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <h5>Brand 2</h5>
                        <a href="" class="dropdown-item">Casual Shoes</a>
                        <a href="" class="dropdown-item">Formal Shoes</a>
                        <a href="" class="dropdown-item">Sports Shoes</a>
                        <a href="" class="dropdown-item">Sock</a>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <h5>Brand 3</h5>
                        <a href="" class="dropdown-item">Casual Shoes</a>
                        <a href="" class="dropdown-item">Formal Shoes</a>
                        <a href="" class="dropdown-item">Sports Shoes</a>
                        <a href="" class="dropdown-item">Sock</a>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <h5>Brand 4</h5>
                        <a href="" class="dropdown-item">Casual Shoes</a>
                        <a href="" class="dropdown-item">Formal Shoes</a>
                        <a href="" class="dropdown-item">Sports Shoes</a>
                        <a href="" class="dropdown-item">Sock</a>
                      </div>
                    </div>
                </li>
               <li class="nav-item">
                 <a class="nav-link" href="#">FASHION</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#">SHOE ADVICE</a>
               </li>
              <form class="form-inline my-2 my-lg-0 ml-left">



                <div class="input-group">
                  <input type="text" class="form-control searchbar" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="fa fa-search searchbutton"></i>
                    </button>
                  </span>
                </div>

              </form>
              <li class="nav-item dropdown middle">
           <a class="nav-link dropdown-toggle  my-dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-user usericon" ></i></a>
           <div class="dropdown-menu dropdown-content dropdown-width" aria-labelledby="navbarDropdown">
          <div class="inline">
              <a href="signup.html">  <button type="button" class="btn btn-outline-danger" onclick="window.location.href ='signup.html'">SIGN UP</button></a>
              <a href="login.html"> <button type="button" class="btn btn-outline-danger" onclick="window.location.href ='login.html'">LOGIN</button></a>
            </div>
              <a class="dropdown-item " href="#"></i>Shop</a>
             <a class="dropdown-item" href="#">orders</a>
             <a class="dropdown-item" href="#">address</a>
             <a class="dropdown-item" href="#"></i>Favourites</a>
         </li>
         <a href="#"><i class="fas fa-bell alert-bell"></i></a>

        <a href="#"> <i class="fas fa-shopping-cart shoppingcart"data-toggle="modal" data-target="#myModal"></i></a>
          <a href="#"><i class="fas fa-shopping-bag shoppingbag "></i></a>
    </ul>
  </div>
  </nav>
</section>
<main class="main-content-address">
<section id="bd">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
          <div class="topnav" id="myTopnav">
                <a href="#"><i class="fa fa-user-circle" style="margin-right: 10%;"></i>My Profile</a>
                <a href="#"><i class="fa fa-shopping-bag" style="margin-right: 10%;"></i>My Wallet</a>
                <a href="#"><i class="fa fa-shopping-cart" style="margin-right: 10%;"></i>My Order</a>
                <a href="#"><i class="fa fa-bell" style="margin-right: 10%;"></i>My Wishlist</a>
                <a href="#"><i class="fa fa-star" style="margin-right: 10%;"></i>My Reviews</a>
                <a href="#"><i class="fa fa-question-circle" style="margin-right: 10%;"></i>Q and A</a>
                <a href="#"><i class="fa fa-address-card" style="margin-right: 10%;"></i>Addresses</a>
                <a href="#"><i class="fa fa-window-close" style="margin-right: 10%;"></i>Log Out</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
          </div>
          </div>

      <div class="col-md-9 oc" style="background-color: blanchedalmond;padding: 3%;margin-top: -10%;">
        <div class="col-75">

          <div class="container">

            <form method="post" action="address.php">



              <div class="row">

                <div class="col-50">
                  <h3>Add New Address</h3>

                    <div class="col-50">
                      <label for="fname"><i class="fa fa-user"></i> First Name</label>
                      <input type="text" name="first_name" id="fname" placeholder="Your First name">

                    </div>
                    <div class="col-50">
                      <label for="fname"><i class="fa fa-user"></i> Last Name</label>
                      <input type="text" name="last_name" id="fname" placeholder="Your Last name">
                    </div>



                    <div class="col-50">
                      <label for="email"><i class="fa fa-envelope"></i> Email</label>
                      <input type="text" name="email" id="email"  placeholder="example@example.com">
                    </div>
                    <div class="col-50">
                      <label for="email"><i class="fa fa-phone"></i>Mobile No.</label>
                      <input type="number" name="mob_no" id="email"  placeholder="+91-1234567890">
                    </div>
                <div class="col-50">
                  <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                  <input type="text" name="address" id="adr"  placeholder="">

                </div>
                <div class="col-50">
                  <label for="city"><i class="fa fa-institution"></i> City</label>
                  <input type="text" name="city" id="city"  placeholder="">

                </div>


                    <div class="col-50">
                      <label for="state">State</label>
                      <input type="text" name="state" id="state"  placeholder="">
                    </div>
                    <div class="col-50">
                      <label for="zip">Pin Code</label>
                      <input type="number" name="pin_code" id="zip"  placeholder="">
                    </div>

                </div>
                </div>
              <input type="submit" name="save" value="submit" class="btn-save-address">
            </form>
          </div>
		  <?php


include('db.php');
$sql = "SELECT * FROM `address`";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
				echo "<th>mob_no</th>";
				echo "<th>address</th>";
                echo "<th>city</th>";
                echo "<th>state</th>";
				echo "<th>pin_code</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>"; 
				echo "<td>" . $row['mob_no'] . "</td>";
				echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['state'] . "</td>"; 
				echo "<td>" . $row['pin_code'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>
        </div>

</div>
</section>


</main>
<!-- center of actraction-->
<section id="cta">
  <div class="wrapper">
    <div class="container-fluid">
      <div class="row">
    <div class="col-md-4" class="box">

          <h3 class="h3-cta  ">GET SPECIAL DISCOUNT IN YOUR INBOX</h3>
          <input class="input-cta text-line" type="text" name="" value="" placeholder="Type your Email..."><button type="button" class="btn btn-outline-light btn-sm">SEND</button>
     </div>

     <div class="col-md-4" class="box" >
                 <h3 class="h3-cta"><i class="fas fa-mobile-alt mobile"></i>EXPERIENCE THE myShooz APP.</h3>
              <a href="https://apps.apple.com/ph/app/heat-mvmnt-die-sneaker-app/id1457709330"> <button type="button" class="btn btn-dark btn-lg Download-button btn-sm"><i class="fab fa-apple"></i> Apple Store</button></a>
              <a href="https://play.google.com/store/apps/details?id=com.heatmvmnt.mobileapp"><button type="button" class="btn btn-outline-light btn-lg Download-button btn-sm"><i class="fab fa-google-play"></i>Google Play</button></a>
     </div>

     <div class="col-md-4" class="box">
                 <h3 class="h3-cta ">FOR ANY HELP YOU CAN CALL US AT</h3>
                 <a class="p-cta" style="color:white">+91 922-220-1010</a>
     </div>

    </div>
    </div>
</div>
</section>

  <!-- Footer-->
  <section id="footer">
    <!-- Footer Links -->

<div class="container text-center text-md-left">

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-3 mx-auto">

    <!-- Content -->
    <a href="#">
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">myShooz</h5></a>
    <ul class="list-unstyled">
      <li>
        <a href="#">About</a>
      </li>
      <li>
        <a href="#">Help</a>
      </li>
      <li>
        <a href="#">Contact Us</a>
      </li>
      <li>
        <a href="#">FAQ</a>
      </li>
    </ul>
</div>
  <!-- Grid column -->

  <hr class="clearfix w-100 d-md-none">

  <!-- Grid column -->
  <div class="col-md-3 mx-auto">

    <!-- Links -->
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Quick Links</h5>

    <ul class="list-unstyled">
      <li>
        <a href="#!">Offer Zone</a>
      </li>
      <li>
        <a href="#!">New Launches</a>
      </li>
      <li>
        <a href="#!">myShooz man</a>
      </li>
      <li>
        <a href="#!">myShooz woman</a>
      </li>
    </ul>

  </div>
  <!-- Grid column -->

  <hr class="clearfix w-100 d-md-none">

  <!-- Grid column -->
  <div class="col-md-3 mx-auto">

    <!-- Links -->
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Kids Special</h5>

    <ul class="list-unstyled">
      <li>
        <a href="#!">Cartoon Shoes</a>
      </li>
      <li>
        <a href="#!">Sports shoes</a>
      </li>
      <li>
        <a href="#!">Special shoes</a>
      </li>
      <li>
        <a href="#!">Musical shoes</a>
      </li>
    </ul>

  </div>
  <!-- Grid column -->

  <hr class="clearfix w-100 d-md-none">

  <!-- Grid column -->
  <div class="col-md-3 mx-auto">

    <!-- Links -->
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">TOP Brands</h5>

    <ul class="list-unstyled">
      <li>
        <a href="#!">Puma</a>
      </li>
      <li>
        <a href="#!">Nike</a>
      </li>
      <li>
        <a href="#!">Ascis</a>
      </li>
      <li>
        <a href="#!">Adidas</a>
      </li>
    </ul>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Social buttons -->
<h3 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Show Some Love On</h3>
<ul class="list-unstyled list-inline text-center">
<li class="list-inline-item">
  <a class="btn-floating btn-fb mx-1">
    <i class="fab fa-facebook-f"> </i>
  </a>
</li>
<li class="list-inline-item">
  <a class="btn-floating btn-tw mx-1">
    <i class="fab fa-twitter"> </i>
  </a>
</li>
<li class="list-inline-item">
  <a class="btn-floating btn-gplus mx-1">
    <i class="fab fa-google-plus-g"> </i>
  </a>
</li>
<li class="list-inline-item">
  <a class="btn-floating btn-li mx-1">
    <i class="fab fa-linkedin-in"> </i>
  </a>
</li>
</ul>
<!-- Social buttons -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
<a href="#"><img src="images/icon.png" width="30" height="30"></a>
</div>

</section>
      <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
        </script>
  </body>
</html>


