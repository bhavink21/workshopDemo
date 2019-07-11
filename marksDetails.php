<?php 
session_start();
if(!isset($_SESSION['studentId']))
{
    echo "<script>window.alert('you have to Login First');</script>";
    echo "<script>window.location.href='index.php'</script>";
}
?>
<html>
    <head>
        <title>
            Marks Details Page
        </title>
    </head>
    <body>
    <div align="center">
            <?php 
            if($_SESSION['userType']=='admin')
            {
                echo "<a href='reports.php'>Report</a>";
            }
            ?>
            <a href="marksDetails.php">Marks</a>
            <a href="logout.php">LogOut</a>
        </div>
        <table align="center" border="2">
            <form method="post" action="Include/marksDetails.inc.php">
            <th colspan="2">
                Marks Details
            </th>
            <tr>
                <td>English :-</td>
                <td><input type="number" name="english" min="0" max="100" required></td>
            </tr>
            <tr>
                <td>Science :-</td>
                <td><input type="number" name="science" min="0" max="100" required></td>
            </tr>
            <tr>
                <td align="center"></td>
                <td align="center"><input type="submit" name="submit" value="Submit"></td>
            </tr>
            </form>
        </table>
    </body>
</html>