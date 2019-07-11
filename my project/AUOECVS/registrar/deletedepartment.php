<?php
include "../db_config/dbconfig.php";
$taskkey =$_REQUEST['sid'];
$tsk = $_REQUEST['sid'];
$SQL="DELETE FROM Department WHERE DepID='$tsk'";
$qu="SELECT * FROM Student WHERE DepID='$tsk'";
			$res1=mysqli_query($con,$qu);
			if(mysqli_num_rows($res1)<1)
			{  
               mysqli_query($con,$SQL);
				mysqli_close($con);
				print "<script>location.href = 'managedepartment.php'</script>";
			}
			else
			{
				
				echo "<script lang='javascript'> alert('This Department is in use in Student Information So Can Not Delete!');</script>";

		    echo "<script>location.href = 'managedepartment.php'</script>";

							}
?>