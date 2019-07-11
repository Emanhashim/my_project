<?php
 include_once("headeroffices.php");
?>


    <link href="../css/form.css" rel="stylesheet" type="text/css" />
               <div class="panel panel-default">
                  <div class="panel-heading">
						<p align="left"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Admin Profile</font></p>
						<p align="left"><font size=4 face="Imprint MT Shadow FB" color="#90999c">Profile / Admin Profile</font></p>
                  </div>
<div class="col-md-12">

 <div class="panel-body">

    <div style="margin-top: 20px;" class="row">
	
	
	
<div class="container">
<div class="panel">  
              <div class="panel panel-default">
                  <div class="panel-body">
				 
<?php
	include_once("../db_config/dbconfig.php");
if (isset($_POST["updprofile"]))
	{
	$imagename = $_FILES['profilepic']['name'];
	$imgname = rand().$_FILES['profilepic']['name'];
	move_uploaded_file($_FILES['profilepic']['tmp_name'],"../registrar/uploads/registrarphoto/". $imgname);
	$username=$_POST['username'];
	$a = $_POST['fname'];
    $b = $_POST['mname'];
    $c = $_POST['lname'];
	$d = $_POST['phone'];
	$e = $_POST['email'];
	$f = $_POST['sex'];
	$g = $_POST['birth'];
	
	if((preg_match("/^[a-zA-Z ]*$/",$a)) && (preg_match("/^[a-zA-Z ]*$/",$b)) && (preg_match("/^[a-zA-Z ]*$/",$c)) && (preg_match("/^[a-zA-Z ]*$/",$f)))
				{
				$bd=strtotime("$g");
				$now=time();
				$age=$now-$bd;
				$aa=$age/ 60/60/24/365.25;
				$yage=floor($aa);
				if($yage>=18)
				{
					if((strlen($d)>=9) || (strlen($d)==10))
					{
	
			$sql = "UPDATE Account SET Fname='$a',Mname='$b',Lname='$c',Phone='$d',Email='$e',Sex='$f',Birth_date='$g',Photo='$imgname' WHERE Username='$username'";
				if(mysqli_query($con,$sql))
				{
					echo "<script lang='javascript'> alert('Successfully Update Profile');</script>";
					print "<script>location.href = 'profile.php'</script>";
				}
				else
				{
					echo "<strong><font color='Red' size=5 face='Imprint MT Shadow FB'><br>Profile Not Updated successfully.</font></strong>";
				}
					}
					else 
					{
					echo "<script lang='javascript'> alert('Your Phone Number is less than 10 Digit old Please Re Enter Again!');</script>";	
					}
				}
				
				else 
				{
					echo "<script lang='javascript'> alert('Your Age is less than 18 Years old Please Re Enter Valid Birth Date');</script>";
				}
				
				}
				else
				{
				 	echo "<script lang='javascript'> alert('Please fill Valid Letter!');</script>";
				}

	}
	 if(isset($_POST["change"]))
     {
		$pss=$_POST['npss'];
	   $ps1=md5($_POST['npss']);
	   $ps2=md5($_POST['cnpss']);
        $query="SELECT * FROM Account WHERE Password='$ps1'";
         $res=mysqli_query($con,$query);
            if(mysqli_num_rows($res)>0)
            {
                echo "<script lang='javascript'> alert('This Password is Before Use Please Enter New Password');</script>";
            }
			else
			{
				if($ps1!=$ps2)
				{
					echo "<strong><font color='Red' size=6 face='Imprint MT Shadow FB'><br>Password Does't Match.</font></strong>";
				}
				else if(strlen($pss)<=7)
				{
					echo "<strong><font color='Red' size=6 face='Imprint MT Shadow FB'><br>Your Input Password is Minimum Please Re Enter Again!.</font></strong>";					
				}
				else{
            	   $updates="Update Account set Password='$ps1' where Username='$_SESSION[SESS_FIRST_NAME]'";
				   $updates=mysqli_query($con,$updates);
				   
						if($updates)
						{
							echo "<script lang='javascript'> alert('Successfully Password Change');</script>";
							print "<script>location.href = 'profile.php'</script>";
						}
	               }
			}
                
	}
	
	
	
	
	
	?>
								   
                   	

				  			 <?php
                                        	$nomessages=mysqli_query($con,"SELECT * FROM Account WHERE Username='$_SESSION[SESS_FIRST_NAME]'");
                                            if(mysqli_num_rows($nomessages)){
											while($row=mysqli_fetch_array($nomessages))
											{
											$usr=$row['Username'];
											$fn=$row['Fname'];
											$mn=$row['Mname'];
											$ln=$row['Lname'];
											$phone=$row['Phone'];
											$em=$row['Email'];
											$se=$row['Sex'];
											$bd=$row['Birth_date'];
											$role=$row['Role'];
											$image4="<img src='../registrar/uploads/registrarphoto/$row[Photo]' width=180 height=200 class='img-circle'";
											}
											}
											else
											{
											$image4="<img src='images/profilepic.jpg' width=40 height=40 class='img-circle'";																						}
											?>
											
											
											
							 <fieldset>
							<legend>Welcome To My Profile</legend>
							<div class="col-md-7">
							
							<form name=f5 action="" method=post enctype="multipart/form-data">
<table width="510" background='images/bg.jpg' border="2" style="margin-left:2px;">
<tr><td colspan="5" align="center"><div class="navigation"><legend class="text-center"><font size=6 face="Imprint MT Shadow FB"> Account Information</legend></font><br><?php echo $image4; ?><br><br><br></div></td></tr>
<tr><td>IDNO</td><td><input type="text" name="username" size="120" value="<?php echo $usr; ?>"   readonly='true'/></td></tr>
<tr><td>First Name</td><td><input name=fname type=text size="120" value="<?php echo $fn; ?>" /></td></tr>
<tr><td>Father Name</td><td><input name=mname type=text size="120" value="<?php echo $mn; ?>" /></td></tr>
<tr><td>Grand Father Name</td><td><input name=lname type=text size="120" value="<?php echo $ln; ?>" /></td></tr>
<tr><td>Sex</td><td><input name=sex type=text size="120" value="<?php echo $se; ?>" /></td></tr>
<tr><td>Birth Date</td><td><input name=birth type=date size="120" value="<?php echo $bd; ?>" /></td></tr>
<tr><td>Phone</td><td><input name=phone type=number size="120" value="<?php echo $phone; ?>" /></td></tr>
<tr><td>Email</td><td><input name=email type=email size="120" value="<?php echo $em; ?>" /></td></tr>
<tr><td>Role</td><td><input name=role type=text size="120" value="<?php echo $role; ?>"  readonly='true'    /></td></tr>
<tr><td>Photo Profile</td><td><input name=profilepic type=file value=""  /></td></tr>
</table>
</br>
<button type="submit" name="updprofile" id="updprofile" class="btn btn-info btn pull-right">Update Profile</button></br>			   
		</form>			
</fieldset>		   
				   
				   
				    <fieldset>
							<legend>Change Password</legend>
				   <form action="#" class="navbar-search form-inline" style="margin-top:6px" method="POST">
                                 <div class="required">
            		                  <input type="password" placeholder="Enter New Password" name="npss" required>
									  <input type="password" placeholder="Confirm New Password" name="cnpss" required>
									  <input type="submit" class="success button expand" name="change" value="Change Password">

                                   </div>
								   </form>  
								   </fieldset>

</div>
</div>
</div>
							
							</div>
                          </div>
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