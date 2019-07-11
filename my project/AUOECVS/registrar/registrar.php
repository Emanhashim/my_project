<?php
 include_once("headeroffices.php");
?>
               <div class="panel panel-default">
                  <div class="panel-heading">
						<p align="left"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Registrar Dashboard</font></p>
						<p align="left"><font size=4 face="Imprint MT Shadow FB" color="#90999c">Home / Registrar Dashboard</font></p>
                  </div>
<div class="col-md-12">

 <div class="panel-body">
    <div style="margin-top: 20px;" class="row">
       <div class="container">
	   
<div class="panel">
             <div class="panel panel-default">
              <div class="panel-heading">
			  <h3 class="panel-title"> 
                     <form action="#" class="navbar-search form-inline" style="margin-top:6px" method="POST">
                         <div class="required"><p align="center"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Welcome To Registrar Office</font></p></div>

                   	</form>  
                    
                    
               </h3>
              </div>
   <div class="panel-body">
        <div class="pbody">
             <div class="row">
             
                <div class="col-md-5">
                   </div>
                     </div>
                
                    </div>
                    <div class="panel-group" id="accordion">
                          <div class="head" >
                            <div class="ptitle">
                              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                  <font size=5 color="#6495ed" Face="Agency FB"><b>Admas University Registrar Office </b></font>
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="panel-body">
                                    <font size=3 color="#191970" Face="Century"> The office of the registrar is responsible for admission, Student registration, Certificate , record keeping, academic status determination, check for each student information, certification of graduates, awarding of degrees and so on.
                     
							  </div>
                            </div>
                          </div>
                          <div  class="head"  >
                            <div class="ptitle">
                              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                  <font size=5 color="#6495ed" Face="Agency FB"><b>Admas University Registrar Student Certificate Report</b></font>
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <?php
								  include "../db_config/dbconfig.php";
                                        	$noclear=mysqli_query($con,"select * from Certificate where Verified='1'");
                                            $notclear=mysqli_query($con,"select * from Certificate where Verified='0'");
                                           $numofclr = mysqli_num_rows($noclear);
                                           $numofnotclr = mysqli_num_rows($notclear);
                                        
                                    ?>
                                  <div class="table table-hover">
                                      <table class="table" id="example">
                                        <tr class="active">
                                                <th>No.</th>
                                                <th>Title</th>
                                                <th>Quantity</th>
                                        </tr>
                                        <tr>
                                                <td>1. </td>
                                                <td>Number of Certified Student</td>
                                                <td><?php  echo $numofclr;  ?></td>
                                        </tr>
                                        <tr>
                                                <td>2. </td>
                                                <td>Number of UnCertified Student</td>
                                                <td><?php  echo $numofnotclr;  ?></td>
                                        </tr>
                                        <tr class="danger">
                                                <td>#. </td>
                                                <td>Total number of Student</td>
                                                <td><?php  echo $numofnotclr+$numofclr;  ?></td>
                                        </tr>
                                      </table>
                                    </div>
                                  
                                  
                            </div>
                          </div>
                          
                        </div>
                      <div  class="head"  >
                            <div class="ptitle">
                              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                  <font size=5 color="#6495ed" Face="Agency FB"><b>View  UnCertified Student List Report From Registrar Property</b></font>
                                </a>
                              </h4>
                            </div>
							<script type="text/javascript">     
                                                function PrintDiv() {    
                                                   var divToPrint = document.getElementById('divToPrint');
                                                   var popupWin = window.open('', '_blank', 'width=1600,height=1600');
                                                   popupWin.document.open();
                                                   popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
                                                    popupWin.document.close();
                                                  }
                          </script>

                
              </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <div class="table table-striped">
                                  <form action="#" method="post">
        	                       <button onclick="PrintDiv()" class="btn btn-info btn pull-right" name="report" type="submit" title="Print"style="margin-top:13px;">Print List</button>       
                                  </form>
                              <div class="panel-body" style="font-family: times new roman;" >
                                 <div id="divToPrint">
								<div>
								 <b>Un Certified Student List from Registrar is as follows</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <font color="white"> DATE:</font>
                                <font color="orange">
                                    <?php
                                     $Today=date('y:m:d');
                                      $new=date('l, F d, Y',strtotime($Today));
                                          echo $new; ?>
                                 </font> 
                                  </div>
								  <table class="table" align="center" border="1" width="100%" id="example">
                                    <tr class="danger">
                                   <th>SNO</th>
								   <th>IDNO</th>
                                   <th>FNAME</th>
                                   <th>LNAME</th>
								   <th>MNAME</th>
                                   <th>DEPARTMENT</th>
								   <th>Certificate_No</th>
								   <th>Verification Status</th>
                                   </tr>
                                       <?php
									   $i =1;
                                include "../db_config/dbconfig.php";
                                $res=mysqli_query($con,"SELECT* FROM Student,Certificate
											  WHERE Certificate.Idno=Student.Idno AND 
													Certificate.Verified='0'");
                                while($row=mysqli_fetch_array($res))
                                  {
	                              ?>
                                 <tr>
							   <td class="danger"><p><?php echo $i; ?></p></td>
                               <td ><p><?php echo $row['Idno']; ?></p></td>
                               <td><p><?php echo $row['Fname']; ?></p></td>
                               <td><p><?php echo $row['Mname']; ?></p></td>
							   <td><p><?php echo $row['Lname']; ?></p></td>
							   <td><p><?php echo $row['Department']; ?></p></td>
							   <td><p><?php echo $row['Certificate_No']; ?></p></td>
							   <td><p><?php echo $row['Verified']; ?></p></td>

                                </tr>
                                  <?php
								  $i++;
                                 }
                                  ?>
                               </table>
                                    </div>
                                  
                                  
                            </div>
                          </div>
                    
                          
                        </div>
              </div>
			 
			 
			 

			  
			  
              
        </div>
</div>
<style type="text/css">
    input[type="checkbox"] {
        width: 15px;
        height: 15px;
        cursor: pointer;
    }
</style>
<script type="text/javascript">

</script>



            </div>
            
        </div>
    </div>
</div>
<style type="text/css">
    input[type="checkbox"] {
        width: 15px;
        height: 15px;
        cursor: pointer;
    }
</style>

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
