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
<link rel="stylesheet" type="text/css" href="home.html">
	<div class="btn1"><button class="btn" onclick="window.location.href='home.php'"><i class="fa fa-home"></i> Home</button></div>
	<div class="container py-5">
		<div class="row mt-5">
			<?php
				$con = mysqli_connect("localhost","root","","login");
				$sql="SELECT * FROM mobiles";
				$query=mysqli_query($con,$sql);
				$total=mysqli_num_rows($query)>0;

				if($total)
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
									<button class="button">View Details</button>	
								</div>
							</div>
							<br><br>
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
</body>
</html>