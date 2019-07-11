<?php
    include "../connection.php";
    session_start();
    if(isset($_POST['submit']))
    {
        $studentId=$_SESSION['studentId'];
        $english=$_POST['english'];
        $science=$_POST['science'];
        $sqlQuery="INSERT INTO `tbl_studentmarks`(`studentId`, `english`, `science`) VALUES ('$studentId','$english','$science')";
        $fireQuery=mysqli_query($connection,$sqlQuery);
        if($fireQuery)
        {
            echo "<script>window.alert('Data Inserted Succesfully..');</script>";
            echo "<script>window.location.href='../marksDetails.php'</script>";
        }
        else
        {
            echo "<script>window.alert('Data Insertion Failed');</script>";
            echo "<script>window.location.href='../marksDetails.php'</script>";
        }
    }
?>