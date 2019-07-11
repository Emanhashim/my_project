<?php
 include_once("headeroffices.php");
?>

    <link href="../css/form.css" rel="stylesheet" type="text/css" />
	              <div class="panel panel-default">
                  <div class="panel-heading">
						<p align="left"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Registrar Registration</font></p>
						<p align="left"><font size=4 face="Imprint MT Shadow FB" color="#90999c">Registration / Registrar Registration</font></p>
                  </div>
<div class="col-md-12">

 <div class="panel-body">

    <div style="margin-top: 20px;" class="row">
	
	
	
<div class="container">
<div class="panel">  
              <div class="panel panel-default">
                  <div class="panel-body">

<center>
				  			 <form name="" method="post" action="#" enctype="multipart/form-data">
							 <fieldset>
							<legend>Welcome To Student Registration Form</legend>
							<input type="text" name="fname" placeholder="Enter FirstName" required>
							<input type="text" name="mname" placeholder="Enter MiddleName" required>
							<input type="text" name="lname" placeholder="Enter LastName" required>
							<select class="form-control" type="text" name="gender" required>
							<option value="">Select Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							</select>
							  <input type="date"  name="bdate" placeholder="Choose Birth Date" size="30" />


							<input type="text" name="idno" placeholder="Enter IDNO" required>
							<input type="text" name="phone" placeholder="Enter PhoneNumber" pattern="[0-9]{10}" maxlength="10" required>
							<input type="email" name="email" placeholder="Enter Email" required>
							<select class="form-control" type="text" name="campus" required>
							<option value="">Select Campus</option required>
				<?php
											$sql="select DISTINCT CampusName from Campus";
											$result=mysqli_query($con,$sql);
											while($row=mysqli_fetch_array($result))
											{
											$cname=$row['CampusName'];
											echo '<option>'.$cname.'</option>';
											
											} 
                              ?>
				</select>
										<select class="form-control" type="year" name="year" required>
				<option value="">Select Starting Year</option required>
				<?php
				$year=1990;
				while($year<=2050)
				{
				echo "<option>".$year."</option>";
				$year++;
				}
				?>
				</select>
	
							
							<select class="form-control" type="text" name="department" required>
							<option value="">Select Department</option required>
				<?php
											$sql="select DISTINCT DepName from department";
											$result=mysqli_query($con,$sql);
											while($row=mysqli_fetch_array($result))
											{
											$department=$row['DepName'];
											echo '<option>'.$department.'</option>';
											
											} 
                              ?>
				</select>
				<input type="text" name="fstudy" placeholder="Enter FiledofStudy" required>
				<select class="form-control" type="text" name="program" required>
				<option value="">Select Shift Program</option required>
				<option value="Regular">Regular</option>
				<option value="Extension">Extension</option>
				<option value="Distance">Distance</option>
				</select>
				<input type="file" name="profilepic" >
</fieldset>


				<input type="submit" class="success button expand" name="AddStudent" value="Register">
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
