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
							<legend>Welcome To Certificate Adding Form</legend>
							
                              <input type="text" name="cid" placeholder="Enter Certificate Number" required>

                              <input type="text" name="idno" placeholder="Enter Student IDNO" required>
							  <input type="decimal" name="gpa" placeholder="Enter Student GPA" required>
							  <input type="date"  name="endyear" placeholder="Choose End Year" size="30" />
</fieldset>


				<input type="submit" class="success button expand" name="AddCertificate" value="Register">
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
