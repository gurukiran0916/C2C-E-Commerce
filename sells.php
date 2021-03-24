<?php

$con = mysqli_connect("localhost","root","","login");


if(isset($_POST['post']))
    {
        $category=$_POST["category"];
        $brands=$_POST["brands"];
        $year=$_POST["year"];
        $title=$_POST["title"];
        $description=$_POST["description"];
        $price=$_POST["price"];
        

        $i1=addslashes(file_get_contents($_FILES["i1"]["tmp_name"]));
        $i2=addslashes(file_get_contents($_FILES["i2"]["tmp_name"]));
        $i3=addslashes(file_get_contents($_FILES["i3"]["tmp_name"]));
        $i4=addslashes(file_get_contents($_FILES["i4"]["tmp_name"]));
        $i5=addslashes(file_get_contents($_FILES["i5"]["tmp_name"]));
        $email=$_POST["email"];
        $name=$_POST["name"];
        $phone=$_POST["phone"];
        $location=$_POST["location"];

        
        $sql=mysqli_query($con,"INSERT into `mobiles`(`category`,`brands`,`year`,`title`,`description`,`price`,`i1`,`i2`,`i3`,`i4`,`i5`,`email`,`name`,`phone`,`location`) VALUES('$category','$brands','$year','$title','$description','$price','$i1','$i2','$i3','$i4','$i5','$email',$name','$phone','$location')") or die(mysqli_error($con));
        


        if($sql)
        {
            echo "<script>alert(' Product added successfully ')</script>";
            echo  '<script>window.location="sell.html";</script>';

        }

        else
        {
            echo "<script>alert(' Unsuccessfull ')</script>";
            echo  '<script>window.location="sell.html";</script>';
        }    

    }
?>