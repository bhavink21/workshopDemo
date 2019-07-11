<?php
    session_start();
    unset($_SESSION['userType']);
    unset($_SESSION['studentId']);
    echo "<script>window.alert('Loged Out');</script>";
    echo "<script>window.location.href='index.php'</script>";
?>