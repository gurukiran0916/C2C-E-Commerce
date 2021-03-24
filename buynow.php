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
                $bid=$_GET["bid"];
                $sql="SELECT * FROM mobiles where id='$bid'";
                $query=mysqli_query($con,$sql);
                $total=mysqli_num_rows($query)>0;

                if($total)
                {
                    while($row=mysqli_fetch_assoc($query))
                    {
                        ?>

                        <h2>Contact here to get this product</h2>
                        <div class="col-md-8">
                            <form method="post" action="buynow.php?pid=<?php echo $row['id'];?>">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email </th>
                                                    <th>Mobile No</th>
                                                    <th>Location</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td><?php  echo $row['name']; ?></td>
                                                    <td><?php  echo $row['email']; ?></td>
                                                    <td><?php  echo $row['phone']; ?></td>
                                                    <td><?php  echo $row['location']; ?></td>
                                            </tbody>
                                        </table>    
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