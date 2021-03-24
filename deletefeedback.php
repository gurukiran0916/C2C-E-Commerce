<?php
$con= mysqli_connect("localhost","root","","login");

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM feedback WHERE id='$id' ";
    $sql = mysqli_query($con, $query);

   if($sql)
        {
            echo "<script>alert(' Deleted successfully ')</script>";
            echo  '<script>window.location="viewfeedback.php";</script>';

        }

        else
        {
            echo "<script>alert(' Unsuccessfull ')</script>";
            echo  '<script>window.location="viewfeedback.php";</script>';
        }    
}
?>