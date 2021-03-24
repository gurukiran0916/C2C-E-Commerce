<?php

$con = mysqli_connect("localhost","root","","login");


if(isset($_POST['submit']))
    {
        $uname=$_POST["username"];
        $pass=$_POST["password"];

        $sql=mysqli_query($con,"SELECT count(*) as total from login where username='".$uname."' and password='".$pass."'") 
        or die(mysqli_error($conn));

        $result=mysqli_fetch_array($sql);

        if($result['total'] > 0)
        {
            echo "<script>alert(' login successfully ')</script>";
            echo  '<script>window.location="home.php";</script>';

        }

        else
        {
            echo "<script>alert(' invalid username or password ')</script>";
            echo  '<script>window.location="logins.html";</script>';
        }    

    }
?>
