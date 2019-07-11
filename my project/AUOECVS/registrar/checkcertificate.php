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
	$sql="SELECT  * FROM Request WHERE Idno='$id2'";
	$result=mysqli_query($con,$sql) OR die("Unable to execute Queary");
	while($rows=mysqli_fetch_assoc($result))
	{   
	    $idnum=$rows["Idno"];
	}
}
?>
	
	
<div class="container">
<div class="panel">  
              <div class="panel panel-default">
                  <div class="panel-body">
				 
				   <form action="#" class="navbar-search form-inline" style="margin-top:6px" method="POST">
                                 <div class="required">
            		                  <input type="text" placeholder="Please Enter Certificate Number" name="idn"  value="<?php echo $id2;?>" readonly=true required><input type="submit" class="success button expand" name="search_R1" value="Search">
                                  <?php   include "controller/search_controller.php";                        ?>
                                   </div>
								   <?php
if (isset($_POST["updprofile"]))
	{
	include_once("../db_config/dbconfig.php");
	$a = $_POST['cno'];
	$b = $_POST['idno'];
    $c = $_POST['gpa'];
    $d = $_POST['endyear'];
	if(!preg_match("/^[a-zA-Z ]*$/",$c))
				{
				
				$bd=strtotime("$d");
				$now=time();
				$age=$now-$bd;
				$aa=$age/60/60/24/365.25;
				$yage=floor($aa);
				//echo $yage;
				if($yage>=0)
					{
			$sql = "UPDATE Certificate SET GPA='$c',EndYear='$d' WHERE Certificate_No='$a'";
				if(mysqli_query($con,$sql))
				{
					echo "<strong><font color='Green' size=5 face='Imprint MT Shadow FB'><br>Student Certificate Updated Successfully.</font></strong>";
				}
				else
				{
					echo "<strong><font color='Red' size=5 face='Imprint MT Shadow FB'><br>Student Certificate Not Updated successfully.</font></strong>";
				}
					}
					else{
                        echo "<script lang='javascript'> alert('The End of The Class Year is Not Valid Please Re Enter Again!');</script>";
                   }
				}
				else{
                        echo "<script lang='javascript'> alert('The Student GPA is Not Valid Please Re Enter Again!');</script>";
                   }
					

	}
	?>
								   
                   	</form>  
                                   <?php    
                  
                        if(isset($_POST["search_R1"]))
                        {
						?>
							 <fieldset>
							<legend>Welcome To Update Student Certificate Information</legend>
							<div class="col-md-7">
							
							<form name=f5 action="" method=post>
<table width="510" background='images/bg.jpg' border="2" style="margin-left:2px;">
<tr><td colspan="5" align="center"><div class="navigation"><legend class="text-center"><font size=6 face="Imprint MT Shadow FB">   Detail Student Certificate Information</legend></div></td></tr>
<tr><td>Certificate_No</td><td><input type="text" name="cno" size="120" value="<?php echo $responce['Certificate_No']; ?>"   readonly='true'/></td></tr>
<tr><td>IDNO</td><td><input type="text" name="idno" size="120" value="<?php echo $responce['Idno']; ?>"   readonly='true'/></td></tr>
<tr><td>GPA</td><td><input name=gpa type=text size="120" value="<?php echo $responce['GPA']; ?>" /></td></tr>
<tr><td>End Year</td><td><input name=endyear type=text size="120" value="<?php echo $responce['EndYear']; ?>"   /></td></tr>

</table>
</br>
<button type="submit" name="updprofile" id="updprofile" class="btn btn-info btn pull-right">Update Certificate</button></br>
</form>

							
							
							
</fieldset>
<fieldset>
<legend>Welcome To Manage Student Certificate Information</legend>
				  <form class="form-horizontal" role="form" action="" method="post" >
                            <input type="hidden" value="<?php echo $responce['Idno']; ?>" name="Stid"/>
							</br>
                      <select class="btn btn-default" required='' name="op">
                     <option value="">Choose Operation </option>
                    <?php  if($statu=='0'){  ?>            <option value="enable" >Verified Certificate</option><?php   } ?>
                    <?php  if(!$statu=='0'){  ?>            <option value="enable" disabled="" style="color: red;"> Verified Certificate </option><?php   } ?>
                    <?php  if($statu=='0'){  ?>  <option value="disable" disabled="" style="color: red;"> Un Verified Certificate </option><?php   } ?>
                    <?php  if(!$statu=='0'){  ?>  <option value="disable" >Un Verified Certificate</option><?php   } ?>
                     <option value="delete">Delete Certificate</option>
                     </select>

							  <button class="btn btn-default" name="delete_Certificate"><span class="glyphicon glyphicon-ok-circle"></span> Apply</button>
                               <?php   
						}
							   ?>
                       </form>  
                      <?php 
                         include_once('controller/delete_controller.php'); 
                        ?>
						
</fieldset>
						
</fieldset>
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
