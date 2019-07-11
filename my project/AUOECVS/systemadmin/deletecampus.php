<?php
include "../db_config/dbconfig.php";
$taskkey =$_REQUEST['sid'];
$tsk = $_REQUEST['sid'];
$SQL="DELETE FROM messages WHERE MID='$tsk'";
mysqli_query($con,$SQL);
mysqli_close($con);
print "<script>location.href = 'inboxadmin.php'</script>";
?>