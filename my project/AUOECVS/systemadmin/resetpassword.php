<?php
 include_once("headeroffices.php");
?>


    <link href="../css/form.css" rel="stylesheet" type="text/css" />
               <div class="panel panel-default">
                  <div class="panel-heading">
						<p align="left"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Registrar Manage</font></p>
						<p align="left"><font size=4 face="Imprint MT Shadow FB" color="#90999c">Manage / Registrar Manage</font></p>
                  </div>
<div class="col-md-12">

 <div class="panel-body">

    <div style="margin-top: 20px;" class="row">
<?php
if($_GET["reply"] == "to")
   { 
    $id2=$_GET['slid1'];
	$sql="SELECT  * FROM passwordresethistory WHERE Username='$id2'";
	$result=mysqli_query($con,$sql) OR die("Unable to execute Queary");
	while($rows=mysqli_fetch_assoc($result))
	{   
	    $idnum=$rows["Username"];
	}
}
?>
	
	
<div class="container">
<div class="panel">  
              <div class="panel panel-default">
                  <div class="panel-body">
				 
				   <form action="#" class="navbar-search form-inline" style="margin-top:6px" method="POST">
                                 <div class="required">
            		                  <input type="text" name="idn"  value="<?php echo $id2;?>" readonly=true required>
									  <input type="submit" class="success button expand" name="Reset" value="Reset"> </form>
<?php									 
if(isset($_POST['Reset']))
{
	$usr=$_POST['idn'];
	$pss=(md5('Welcome@1'));
	$sql=mysqli_query($con,"Update Account Set Password='$pss' Where Username='$usr'");
	if($sql)
	{
		  echo "<script lang='javascript'> alert('Reset Password Successfully'); </script>";
		  print "<script>location.href = 'inboxreset.php'</script>";
	}
	else
	{
		echo "<script lang='javascript'> alert('Password not Reset'); </script>";
	}
}
?>
</div>
</div>
</div>
							
							</div>
                          </div>

      </form>
              </div>
        </div>     
  </div>
</div>
		
		
    </div>
</div>

            </div>
            <!--/span-->
        </div>
        <!--/row-->

    </div>
</div>

<hr/></font>
 
<?php
 include_once("footer.php");
?>
