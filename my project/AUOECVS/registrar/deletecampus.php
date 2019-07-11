<?php
include "../db_config/dbconfig.php";
$taskkey =$_REQUEST['sid'];
$tsk = $_REQUEST['sid'];
$SQL="DELETE FROM Campus WHERE CampusID='$tsk'";

$qu="SELECT * FROM Department WHERE CampusID='$tsk'";
			$res1=mysqli_query($con,$qu);
			if(mysqli_num_rows($res1)<1)
			{  
               mysqli_query($con,$SQL);
				mysqli_close($con);
				print "<script>location.href = 'managecampus.php'</script>";
			}
			else
			{
				
				echo "<script lang='javascript'> alert('This Campus is in use in Student Information So Can Not Delete!');</script>";

		    echo "<script>location.href = 'managecampus.php'</script>";

							}

?>