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
	
	
	
<div class="container">
<div class="panel">  
              <div class="panel panel-default">
                  <div class="panel-body">
				 
				   <form action="#" class="navbar-search form-inline" style="margin-top:6px" method="POST">
                                 <div class="required">
            		                  <input type="text" placeholder="Please Enter Student IDNO" name="stud_ID" required><input type="submit" class="success button expand" name="search_R" value="Search">
                                  <?php   include "controller/search_controller.php";                        ?>
                                   </div>
<?php
if (isset($_POST["updprofile"]))
	{
	include_once("../db_config/dbconfig.php");
	$imagename = $_FILES['profilepic']['name'];
	$imgname = rand().$_FILES['profilepic']['name'];
	move_uploaded_file($_FILES['profilepic']['tmp_name'],"uploads/studentphoto/". $imgname);
	$a = $_POST['fname'];
    $b = $_POST['mname'];
    $c = $_POST['lname'];
	$d = $_POST['sex'];
	$e = $_POST['idno'];
	$f = $_POST['birth'];
	$g = $_POST['phone'];
	$h = $_POST['birth'];
	$i = $_POST['email'];
	$j = $_POST['program'];

					$dep=$_POST['depart'];
					$sql="Select * from Department where DepName='$dep'";
					$result=mysqli_query($con,$sql);
					if($result)
					{
						while($row=mysqli_fetch_array($result))
                                  {
									$DID=$row['DepID'];
								  }
					$camp=$_POST['campa'];
					$sql1="Select * from Campus where CampusName='$camp'";
					$result1=mysqli_query($con,$sql1);
								  if($result1)
								  {
						while($rows=mysqli_fetch_array($result1))
                                  {
									$CID=$rows['CampusID'];
								  }
								  
				if((preg_match("/^[a-zA-Z ]*$/",$a)) && (preg_match("/^[a-zA-Z ]*$/",$b)) && (preg_match("/^[a-zA-Z ]*$/",$c)) && (preg_match("/^[a-zA-Z ]*$/",$d)))
				{
				$bd=strtotime("$f");
				$now=time();
				$age=$now-$bd;
				$aa=$age/ 60/60/24/365.25;
				$yage=floor($aa);
				if($yage>=18)
				{
					if((strlen($g)>=9) || (strlen($g)==10))
					{
					
			$sql = "UPDATE Student SET Fname='$a',Mname='$b',Lname='$c',Sex='$d',Birth_date='$f',Phone='$g',Email='$i',CampusID=$CID,DepID=$DID,Program='$j',Photo='$imgname' WHERE Idno='$e'";
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
					}

	}
	?>
								   
                   	</form>  
                  <?php    
                  
                        if(isset($_POST["search_R"]))
                        {
						?>
				  			 <?php
								           $ID=$_POST['stud_ID'];
                                        	$nomessages=mysqli_query($con,"SELECT * FROM Student WHERE Idno='$ID'");
                                            if(mysqli_num_rows($nomessages)){
											while($row=mysqli_fetch_array($nomessages))
											{
											$image3="<img src='uploads/studentphoto/$row[Photo]' width=180 height=200 class='img-circle'";
											}
											}
											else
											{
											$image3="<img src='uploads/studentphoto/profilepic.jpg' width=40 height=40 class='img-circle'";																						}
											?>
											
				  			 <?php
								           $ID=$_POST['stud_ID'];
                                        	$nomessages=mysqli_query($con,"SELECT * FROM student,department WHERE student.DepID=department.DepID and Idno='$ID'");
                                            if(mysqli_num_rows($nomessages)){
											while($row=mysqli_fetch_array($nomessages))
											{
											$dn=$row['DepName'];
											$ci=$row['CampusID'];
											}
											}
											else
											{
											$image3="<img src='uploads/studentphoto/profilepic.jpg' width=40 height=40 class='img-circle'";																						}
											?>
 <?php
                                        	$sql=mysqli_query($con,"SELECT * FROM Campus,department WHERE Campus.CampusID=department.CampusID and DepID='$responce[DepID]'");
                                            if(mysqli_num_rows($sql)){
											while($row=mysqli_fetch_array($sql))
											{
											$cn=$row['CampusName'];
											}
											}
											else
											{
											$image3="<img src='images/profilepic.jpg' width=40 height=40 class='img-circle'";																						}
											?>													
							 <fieldset>
							<legend>Welcome To Update Student Information</legend>
							<div class="col-md-7">
							
							<form name=f5 action="" method=post enctype="multipart/form-data">
<table width="510" background='images/bg.jpg' border="2" style="margin-left:2px;">
<tr><td colspan="5" align="center"><div class="navigation"><legend class="text-center"><font size=6 face="Imprint MT Shadow FB">   Detail Student Information</legend></font><br><?php echo $image3; ?><br><br><br></div></td></tr>
<tr><td>IDNO</td><td><input type="text" name="idno" size="120" value="<?php echo $responce['Idno']; ?>"   readonly='true'/></td></tr>
<tr><td>First Name</td><td><input name=fname type=text size="120" value="<?php echo $responce['Fname']; ?>" /></td></tr>
<tr><td>Father Name</td><td><input name=mname type=text size="120" value="<?php echo $responce['Mname']; ?>" /></td></tr>
<tr><td>Grand Father Name</td><td><input name=lname type=text size="120" value="<?php echo $responce['Lname']; ?>" /></td></tr>
<tr><td>Sex</td><td><input name=sex type=text size="120" value="<?php echo $responce['Sex']; ?>" /></td></tr>
<tr><td>Birth Date</td><td><input name=birth type=date size="120" value="<?php echo $responce['Birth_date']; ?>" /></td></tr>
<tr><td>Phone</td><td><input name=phone type=number size="120" value="<?php echo $responce['Phone']; ?>" /></td></tr>
<tr><td>Email</td><td><input name=email type=email size="120" value="<?php echo $responce['Email']; ?>" /></td></tr>
<tr><td>Campus Name</td><td>
<select class="form-control" type="text" name="campa" required>
<option value=""><?php echo $cn;?></option>
<?php $sql="select DISTINCT CampusName,CampusID from Campus";
											$result=mysqli_query($con,$sql);
											while($row=mysqli_fetch_array($result))
											{
											$campus=$row['CampusName'];
											echo '<option>'.$campus.'</option>';
											}
?>
</select>
</td></tr>
<tr><td>Department</td><td>
<select class="form-control" type="text" name="depart" required>
<option value=""><?php echo $dn;?></option>
<?php $sql="select DISTINCT DepName,DepID from Department";
											$result=mysqli_query($con,$sql);
											while($row=mysqli_fetch_array($result))
											{
											$department=$row['DepName'];
											echo '<option>'.$department.'</option>';
											}
?>
</select>
</td></tr><tr><td>Program</td><td><input name=program type=text size="120" value="<?php echo $responce['Program']; ?>" /></td></tr>
<tr><td>Starting Year</td><td><input name=year type=text size="120" value="<?php echo $responce['Year']; ?>" readonly='true' /></td></tr>
<tr><td>Photo Profile</td><td><input name=profilepic type=file value="<?php echo $responce['Photo']; ?>"  /></td></tr>
</table>
</br>
<button type="submit" name="updprofile" id="updprofile" class="btn btn-info btn pull-right">Update Profile</button></br>
</form>

							
							
							
</fieldset>
<fieldset>
							<legend>Welcome To Manage Student Information</legend>
				  <form class="form-horizontal" role="form" action="" method="post" >
                            <input type="hidden" value="<?php if(isset($_POST["search_R"])){  echo $stud_ID;   } ?>" name="Stid"/>
							</br>
                      <select class="btn btn-default" required='' name="op">
                     <option value="">Choose Operation </option>
                    <?php  if($statu=='0'){  ?>            <option value="enable" >Enable Student</option><?php   } ?>
                    <?php  if(!$statu=='0'){  ?>            <option value="enable" disabled="" style="color: red;"> Enable Student </option><?php   } ?>
                    <?php  if($statu=='0'){  ?>  <option value="disable" disabled="" style="color: red;"> Disable Student </option><?php   } ?>
                    <?php  if(!$statu=='0'){  ?>  <option value="disable" >Disable Student</option><?php   } ?>
                     <option value="delete">Delete Student</option>
                     </select>

							  <button class="btn btn-default" name="delete_S"><span class="glyphicon glyphicon-ok-circle"></span> Apply</button>
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
