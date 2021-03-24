<?php

$con = mysqli_connect("localhost","root","","login");


if(isset($_POST['submit']))
    {
        $uname=$_POST["username"];
        $pass=$_POST["password"];

        $sql=mysqli_query($con,"SELECT count(*) as total from admin where username='".$uname."' and password='".$pass."'") 
        or die(mysqli_error($conn));

        $result=mysqli_fetch_array($sql);

        if($result['total'] > 0)
        {
            echo "<script>alert('login successfull ')</script>";
            echo  '<script>window.location="dashboard.php";</script>';

        }

        else
        {
            echo "<script>alert(' invalid username or password ')</script>";
            echo  '<script>window.location="admin.html";</script>';
        }    

    }
?>
