<?php
    include "../connection.php";
    if($_GET['english']!='' && $_GET['science']!='')
    {
       $sqlQuery="SELECT sData.name,sMarks.science,sMarks.english FROM tbl_studentmarks sMarks, tbl_studentdata sData WHERE sMarks.science >= ".$_GET['science']." and sMarks.english >=".$_GET['english']." and sData.studentId=sMarks.studentId"; 
    }
    elseif ($_GET['english']=='' && $_GET['science']!='') 
    {
        $sqlQuery="SELECT sData.name,sMarks.science,sMarks.english FROM tbl_studentmarks sMarks, tbl_studentdata sData WHERE sMarks.science >= ".$_GET['science']." and sData.studentId=sMarks.studentId";
    }
    elseif ($_GET['english']!='' && $_GET['science']=='') 
    {
        $sqlQuery="SELECT sData.name,sMarks.science,sMarks.english FROM tbl_studentmarks sMarks, tbl_studentdata sData WHERE  sMarks.english >=".$_GET['english']." and sData.studentId=sMarks.studentId"; 
    }
    $fireQuery=mysqli_query($connection,$sqlQuery);
    if($fireQuery)
    {
        echo "<table align='center' border='1'><tr><td>Name</td><td>Science</td><td>English</td></tr>";
        while($row=mysqli_fetch_assoc($fireQuery))
        {
            echo "<tr><td>".$row['name']."</td><td>".$row['science']."</td><td>".$row['english']."</td></tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "No Data Found";
    }
?>