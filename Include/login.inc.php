<?php
    include "../connection.php";
    session_start();
    $emailId=$_POST['emailId'];
    $password=md5($_POST['password']);
    $sqlQuery="SELECT `studentId`,`userType` FROM `tbl_studentdata` WHERE `emailId`='$emailId' AND `password`='$password'";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    
    if(mysqli_num_rows($fireQuery)!=0)
    {
        $row=mysqli_fetch_assoc($fireQuery);
        $_SESSION['userType']=$row['userType'];
        $_SESSION['studentId']=$row['studentId'];
        echo "<script>window.alert('Loged in Succesfully..');</script>";
        echo "<script>window.location.href='../marksDetails.php'</script>";
    }
    else
    {
        echo "<script>window.alert('Login Failed');</script>";
        echo "<script>window.location.href='../index.php'</script>";
    }
?>