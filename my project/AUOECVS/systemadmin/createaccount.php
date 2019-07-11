<?php
 include_once("headeroffices.php");
?>

    <link href="../css/form.css" rel="stylesheet" type="text/css" />
               <div class="panel panel-default">
                  <div class="panel-heading">
						<p align="left"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Admin Registration</font></p>
						<p align="left"><font size=4 face="Imprint MT Shadow FB" color="#90999c">Registration / Admin Registration</font></p>
                  </div>
<div class="col-md-12">

 <div class="panel-body">

    <div style="margin-top: 20px;" class="row">
<div class="container">
<div class="panel">  
    <div class="container">
<div class="panel">  
              <div class="panel panel-default">
                  <div class="panel-body">

<center>
				  			 <form name="" method="post" action="#" enctype="multipart/form-data">
							 <fieldset>
							<legend>Welcome To User Registration Form</legend>
							<input type="text" name="username" placeholder="Enter UserName" required>
							<input type="text" name="Fname" placeholder="Enter FirstName" required>
							<input type="text" name="Mname" placeholder="Enter MiddleName" required>
							<input type="text" name="Lname" placeholder="Enter LastName" required>
							<select class="form-control" type="text" name="Sex" required>
							<option value="">Select Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							</select>
							<input type="date"  name="bdate" placeholder="Choose Birth Date" size="30" />
							<input type="text" name="phone" placeholder="Enter PhoneNumber" pattern="[0-9]{10}" required>
							<input type="email" name="email" placeholder="Enter Email" required>
							<select class="form-control" type="text" name="role" required>
							<option value="">Select Role</option required>
				<?php
											$sql="select DISTINCT Role from Account";
											$result=mysqli_query($con,$sql);
											while($row=mysqli_fetch_array($result))
											{
											$Role=$row['Role'];
											 echo '<option value="'.$Role.'">'.$Role.'</option>';
											} 
                ?>
				</select>
</fieldset>


				<input type="submit" class="success button expand" name="AddAccount" value="Register">
				<input type="reset" class="success button expand" name="clear" value="Clear"/>
				
							</form>	
							</center>
</div>





                          </div>
      <?php
        
            include_once('controller/registration_controller.php');
      ?>
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
