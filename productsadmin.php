   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="sells.css">  

<div class="btn1"><button class="btn" onclick="window.location.href='dashboard.php'"><i class="fa fa-home"></i>Go back</button></div>
<div>
  <?php
$connection = mysqli_connect("localhost","root","","login");
?>
<br><br><br>
<div class="container-fluid">

    <div class="card shadow mb-4">
    
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM mobiles";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID </th>
                            <th>Username </th>
                            <th>Email </th>
                            <th>Product</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['title']; ?></td>
                                
                                <td>
                                    <form action="deleteusers.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


</div>
</div>