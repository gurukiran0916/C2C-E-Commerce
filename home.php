<!DOCTYPE html>
<html>
<head>
	<title>C2C</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

	<style type="text/css">
		.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 5px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
	</style>

</head>
<body>
	<link rel="stylesheet" type="text/css" href="home.css">
    <div id="navlist"> 
	        <a href="home.html">Home</a> 
	        <a href="products.php">Our Products</a> 
	        <a href="logins.html">Login</a> 
	        <a href="about.html">About Us</a> 
	        <a href="contact.html">Contact Us</a> 
	          
	        <div class="search"> 
	            <form action="search.php" method="POST"> 
	                <input type="text" placeholder=" Search Products" name="search"> 
	                <button name="submit"> 
	                    <i class="fa fa-search"></i> 
	                </button> 
	            </form> 
	        </div> 
	        <a href="sells.html">Sell</a> 
	        <a href="admins.html">Admin</a>
	        </div>

  </div>
</div>
	</div><br><br>
    
	<div id="list">
		
		<a href="mobiles.php?id=mobiles">Mobiles</a>
		<a href="mobiles.php?id=motors">Motors</a>
		<a href="mobiles.php?id=electronics">Electronics</a>
		<a href="mobiles.php?id=sports">Sports</a>
		<a href="mobiles.php?id=fashion">Fashion</a>
		<a href="mobiles.php?id=beauty">Health &	Beauty</a>
		<a href="mobiles.php?id=appliances">Appliances</a>

	</div>

<div>
	<div class="slider">
      <div class="slides">

        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">

        <div class="slide first">
          <img src="ecom1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="ecom2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="ecom3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="ecom4.jpg" alt="">
        </div>

      </div>

      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>

    </div>

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>

</div>


<div class="container py-5">
		<div class="row mt-5">
			<?php

				$con = mysqli_connect("localhost","root","","login");
				$sql="SELECT * FROM mobiles ORDER BY RAND()LIMIT 6";
				$query=mysqli_query($con,$sql);
				

				if($query)
				{
					while($row=mysqli_fetch_assoc($query))
					{
						?>

						<div class="col-md-4">
							<form method="post" action="details.php?pid=<?php echo $row["id"]; ?>">
							<div class="card">
								<img src="opt/lampp/htdocs<?php echo['i1']; ?>" width="200px" height="200px" class="card-img-top">
								<div class="card-body">
									
									<h3 class="card-title"><?php echo $row['title']; ?></h3>
									<p class="card-text"><?php echo $row['brands']; ?></p>
									<p class="card-text"><?php echo $row['year']; ?></p>
									<p class="card-text"><?php echo $row['price']; ?></p>
									<button class="button" onclick="location.href='details.php'">View Details</button>	
								</div>
							</div>
							<br>
						</form>
						</div>
						<?php
					}
				}
				else 
				{
					echo'<script>alert("No record found")</div>script>';
				}
				?>
		</div>
	</div>



<footer class="footer-distributed">
 
    <div class="footer-left">
    <p class="footer-links">
  <p><a style="color: white;" href="home.php">Home</a></p>
    <p><a style="color: white;" href="logins.html">Login</a></p>
    <p><a style="color: white;" href="products.php">Products</a></p>
    <p><a style="color: white;" href="about.html">About Us</a></p>
    <p><a style="color: white;" href="contact.html">Contact Us</a></p>
    </p>

    </div>

    <div class="footer-center">
 
    <div>
    <i class="fa fa-map-marker"></i>
    <p><span>Acharya Institute Of Technology<br>Hesarghatta main road <br>Soladevanahalli<br>BANGALORE-560107 </p>
    </div>
 
    <div>
    <i class="fa fa-phone"></i>
    <p>+91 9108012674</p><br>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 7899591558</p>
    </div>
 
    <div>
    <i class="fa fa-envelope"></i>
    <p><a href="mailto:support@company.com">manjunaths.17.becs@acharya.ac.in</a></p>
    <p><a href="mailto:support@company.com">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gurukiran.17.becs@acharya.ac.in</a></p>
    </div>
 
    </div>
 
    <div class="footer-right">
 
    <p class="footer-company-about">
    <span><a href="aboutus.html" style="color: #ffffff;" >Follow Us On</a></span>
    </p>
 
    <div class="footer-icons">
 
    <a href=""><i class="fa fa-facebook"></i></a>
 
    </div>
 
    </div>
 
    </footer>
</body>
</html>
