<?php
    include "../connection.php";
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $emailId=$_POST['emailId'];
        $rollNo=$_POST['rollNo'];
        $password=md5($_POST['password']);
        $sqlQuery="INSERT INTO `tbl_studentdata`(`name`, `emailId`, `rollNo`, `password`) VALUES ('$name','$emailId','$rollNo','$password')";
        $fireQuery=mysqli_query($connection,$sqlQuery);
        if($fireQuery)
        {
            echo "<script>window.alert('Data Inserted Succesfully..');</script>";
            echo "<script>window.location.href='../index.php'</script>";
        }
        else
        {
            echo "<script>window.alert('Data Insertion Failed');</script>";
            echo "<script>window.location.href='../registrationForm.php'</script>";
        }
    }
?>