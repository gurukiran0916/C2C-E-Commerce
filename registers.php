<?php

$con = mysqli_connect("localhost","root","","login");


if(isset($_POST['submit']))
    {
        $email=$_POST["email"];
        $name=$_POST["username"];
        $password=$_POST["password"];
        $confirm=$_POST['confirm'];

        if($password==$confirm)
        {
        
            $sql=mysqli_query($con,"SELECT * from register WHERE email='$email'");

            if(mysqli_num_rows($sql) >0)
            {
                echo "<script>alert('Emial ID already exists ')</script>";
                echo  '<script>window.location="registers.html";</script>';
            }

            else
            {

                $sql=mysqli_query($con,"INSERT into `register`(`email`,`username`,`password`) VALUES('$email','$name','$password')") or die(mysqli_error($con));
            
                        
                if($sql)
                {
                    echo "<script>alert(' Registered successfully ')</script>";
                    echo  '<script>window.location="registers.html";</script>';

                }

                else
                {
                    echo "<script>alert(' Unsuccessfull ')</script>";
                    echo  '<script>window.location="registers.html";</script>';
                }  
            }    
        }
        else
            {
                echo "<script>alert('password and confirm password are not matching')</script>";
                echo  '<script>window.location="registers.html";</script>';
            }
    }
?>