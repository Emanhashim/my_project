<?php
 include_once("headeroffices.php");
?>


    <link href="../css/form.css" rel="stylesheet" type="text/css" />
               <div class="panel panel-default">
                  <div class="panel-heading">
						<p align="left"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Admin Manage</font></p>
						<p align="left"><font size=4 face="Imprint MT Shadow FB" color="#90999c">Manage / Admin Manage</font></p>
                  </div>
<div class="col-md-12">

 <div class="panel-body">

    <div style="margin-top: 20px;" class="row">
	
	
	
<div class="container">
<div class="panel">  
              <div class="panel panel-default">
                  <div class="panel-body">
				 
				   <form action="#" class="navbar-search form-inline" style="margin-top:6px" method="POST">
                                 <div class="required">
            		                  <input type="text" placeholder="Please Enter Username" name="usn" required><input type="submit" class="success button expand" name="Search_user" value="Search">
                                  <?php   include "controller/search_controller.php";                        ?>
                                   </div>
<?php
if (isset($_POST["updprofile"]))
	{
	include_once("../db_config/dbconfig.php");
	$a = $_POST['fname'];
    $b = $_POST['mname'];
    $c = $_POST['lname'];
	$d = $_POST['sex'];
	$e = $_POST['usn'];
	$f = $_POST['birth'];
	$g = $_POST['phone'];
	$h = $_POST['email'];
	$i = $_POST['role'];
				$bd=strtotime("$f");
				$now=time();
				$age=$now-$bd;
				$aa=$age/ 60/60/24/365.25;
				$yage=floor($aa);
				if($yage>=18)
				{
					if((preg_match("/^[a-zA-Z ]*$/",$a)) && (preg_match("/^[a-zA-Z ]*$/",$b)) && (preg_match("/^[a-zA-Z ]*$/",$c)))
				{
			$sql = "UPDATE Account SET Fname='$a',Mname='$b',Lname='$c',Sex='$d',Birth_date='$f',Phone='$g',Email='$h',Role='$i' WHERE Username='$e'";
				if(mysqli_query($con,$sql))
				{
					echo "<strong><font color='Green' size=5 face='Imprint MT Shadow FB'><br>Profile Updated Successfully.</font></strong>";
				}
				else
				{
					echo "<strong><font color='Red' size=5 face='Imprint MT Shadow FB'><br>Profile Not Updated successfully.</font></strong>";
				}
				}
				else
				{
					echo "<script lang='javascript'> alert('Please fill Valid Letter!');</script>";

				}
				}
				else 
				{
				echo "<script lang='javascript'> alert('Your Age is less than 18 Years old Please Re Enter Valid Birth Date');</script>";

				}

	}
	?>
								   
                   	</form>  
                  <?php    
                  
                        if(isset($_POST["Search_user"]))
                        {
						?>
				  			 <?php
								           $ID=$_POST['usn'];
                                        	$nomessages=mysqli_query($con,"SELECT * FROM Account WHERE Username='$ID'");
                                            if(mysqli_num_rows($nomessages)){
											while($row=mysqli_fetch_array($nomessages))
											{
											$image3="<img src='../registrar/uploads/registrarphoto/$row[Photo]' width=180 height=200 class='img-circle'";
											}
											}
											else
											{
											$image3="<img src='../images/profilepic.jpg' width=40 height=40 class='img-circle'";																						}
											?>
							 <fieldset>
							<legend>Welcome To Update User Information</legend>
							<div class="col-md-7">
							
							<form name=f5 action="" method=post enctype="multipart/form-data">
<table width="510" background='images/bg.jpg' border="2" style="margin-left:2px;">
<tr><td colspan="5" align="center"><div class="navigation"><legend class="text-center"><font size=6 face="Imprint MT Shadow FB">   Detail User Information</legend></font><br><?php echo $image3; ?><br><br><br></div></td></tr>
<tr><td>Username</td><td><input type="text" name="usn" size="120" value="<?php echo $responce['Username']; ?>"   readonly='true'/></td></tr>
<tr><td>First Name</td><td><input name=fname type=text size="120" value="<?php echo $responce['Fname']; ?>" /></td></tr>
<tr><td>Father Name</td><td><input name=mname type=text size="120" value="<?php echo $responce['Mname']; ?>" /></td></tr>
<tr><td>Grand Father Name</td><td><input name=lname type=text size="120" value="<?php echo $responce['Lname']; ?>" /></td></tr>
<tr><td>Sex</td><td><input name=sex type=text size="120" value="<?php echo $responce['Sex']; ?>" /></td></tr>
<tr><td>Birth Date</td><td><input name=birth type=date size="120" value="<?php echo $responce['Birth_date']; ?>" /></td></tr>
<tr><td>Phone</td><td><input name=phone type=number size="120" value="<?php echo $responce['Phone']; ?>" /></td></tr>
<tr><td>Email</td><td><input name=email type=email size="120" value="<?php echo $responce['Email']; ?>" /></td></tr>
<tr><td>Role</td><td><input name=role type=text size="120" value="<?php echo $responce['Role']; ?>" /></td></tr>
</table>
</br>
<button type="submit" name="updprofile" id="updprofile" class="btn btn-info btn pull-right">Update Profile</button></br>
</form>

							
							
							
</fieldset>
<fieldset>
							<legend>Welcome To Manage User Information</legend>
				  <form class="form-horizontal" role="form" action="" method="post" >
                            <input type="hidden" value="<?php if(isset($_POST["Search_user"])){  echo $ID;   } ?>" name="usname"/>
							</br>
                      <select class="btn btn-default" required='' name="op">
                     <option value="">Choose Operation </option>
                    <?php  if($statu=='0'){  ?>            <option value="enable" >Enable User</option><?php   } ?>
                    <?php  if(!$statu=='0'){  ?>            <option value="enable" disabled="" style="color: red;"> Enable User </option><?php   } ?>
                    <?php  if($statu=='0'){  ?>  <option value="disable" disabled="" style="color: red;"> Disable User </option><?php   } ?>
                    <?php  if(!$statu=='0'){  ?>  <option value="disable" >Disable User</option><?php   } ?>
                     <option value="delete">Delete User</option>
                     </select>

							  <button class="btn btn-default" name="delete"><span class="glyphicon glyphicon-ok-circle"></span> Apply</button>
                               <?php   
							   } 
							   ?>
                       </form>  
                      <?php 
                         include_once('controller/delete_controller.php'); 
                        ?>
						
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
