<?php

$con = mysqli_connect("localhost","root","","login");


if(isset($_POST['submit']))
    {
        $email=$_POST["email"];
        $name=$_POST["name"];
        $feedback=$_POST["feedback"];
        $mobile=$_POST['mobile'];

            if(empty($email) || empty($feedback))
            {
                echo "<script>alert('All fields are required')</script>";
                echo '<script>window.location="contact.html";</script>';
            }

            else{
  
                   $sql=mysqli_query($con,"INSERT into `feedback`(`name`,`mobile`,`email`,`feedback`) VALUES('$name','$mobile','$email','$feedback')") or die(mysqli_error($con));
                
                            
                    if($sql)
                    {
                        echo "<script>alert('Feedback Submitted successfully ')</script>";
                        echo  '<script>window.location="contact.html";</script>';

                    }

                    else
                    {
                        echo "<script>alert(' Unsuccessfull ')</script>";
                        echo  '<script>window.location="contact.html";</script>';
                    }
                 }
    }            

?>