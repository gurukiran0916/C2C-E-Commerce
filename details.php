<html>
<head>
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
<link rel="stylesheet" type="text/css" href="sells.css">
<link rel="stylesheet" type="text/css" href="home.php">
	<div class="btn1"><button class="btn" onclick="window.location.href='products.php'">Go Back</button></div>
	<div class="container py-5">
		<div class="row mt-5">
			<?php
				$con = mysqli_connect("localhost","root","","login");
				$pid=$_GET["pid"];
				$sql="SELECT * FROM mobiles where id='$pid'";
				$query=mysqli_query($con,$sql);
				$total=mysqli_num_rows($query)>0;

				if($total)
				{
					while($row=mysqli_fetch_assoc($query))
					{
						?>

						

						<div class="col-md-4">
							<div class="card">
								<img src="opt/lampp/htdocs<?php echo['i1']; ?>" width="200px" height="200px" class="card-img-top"> <br>
								<img src="opt/lampp/htdocs<?php echo['i2']; ?>" width="200px" height="200px" class="card-img-top"><br>
								<img src="opt/lampp/htdocs<?php echo['i3']; ?>" width="200px" height="200px" class="card-img-top"><br>
								<img src="opt/lampp/htdocs<?php echo['i4']; ?>" width="200px" height="200px" class="card-img-top"><br>
								<img src="opt/lampp/htdocs<?php echo['i5']; ?>" width="200px" height="200px" class="card-img-top">
							</div>
							<br><br>
						</div>

						<div class="col-md-8">
							<form method="post" action="buynow.php?bid=<?php echo $row['id'];?>">
								<div class="card">
									<div class="card-body">
											<h3 class="card-title"><?php echo $row['title']; ?></h3>
											<p class="card-text"><?php echo $row['brands']; ?></p>
											<p class="card-text"><?php echo $row['year']; ?></p>
											<p class="card-text"><?php echo $row['price']; ?></p>
											<p class="card-text"><?php echo $row['description']; ?></p>
											<p class="card-text"><?php echo $row['location']; ?></p>
											<button class="button">Buy Now</button>	
								</div>
							</div>	
						    </form>
						</div>	
						<?php
					}
				}
				
			?>

		</div>
	</div>
</body>
</html>