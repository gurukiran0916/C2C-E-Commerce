<?php
$connection = mysqli_connect("localhost","root","","login");

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM mobiles WHERE id='$id' ";
    $sql = mysqli_query($connection, $query);

   if($sql)
        {
            echo "<script>alert(' Deleted successfully ')</script>";
            echo  '<script>window.location="productsadmin.php";</script>';

        }

        else
        {
            echo "<script>alert(' Unsuccessfull ')</script>";
            echo  '<script>window.location="productsadmin.php";</script>';
        }    
}
?>