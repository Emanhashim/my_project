<?php
include "../db_config/dbconfig.php";
$taskkey =$_REQUEST['cid'];
$tsk = $_REQUEST['cid'];
$SQL="DELETE FROM passwordresethistory WHERE Username='$tsk'";
mysqli_query($con,$SQL);
mysqli_close($con);
print "<script>location.href = 'inboxreset.php'</script>";
?>