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

				  			 <form name="" method="post" action="#">
							 <fieldset>
							<legend>Welcome To Department Adding Form</legend>
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
							
                              <input type="text" name="Dname" placeholder="Enter Department Name" required>
							  

                            <select class="form-control" required='' name="yr">
                              <option value="">Select Program Year</option>
							  <option value="1"> 1  </option> 
							  <option value="2"> 2  </option> 
                               <option value="3"> 3  </option> 
                               <option value="4"> 4  </option> 
                               <option value="5"> 5  </option> 
                          
                                
                </select>

</fieldset>


				<input type="submit" class="success button expand" name="Add_dep" value="Register">
				<input type="reset" class="success button expand" name="clear" value="Clear"/>
							</form>	
							</div>
                          </div>

      </form>
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
