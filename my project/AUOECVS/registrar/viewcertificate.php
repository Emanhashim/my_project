<?php
 include_once("headeroffices.php");
?>
               <div class="panel panel-default">
                  <div class="panel-heading">
						<p align="left"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Registrar Report</font></p>
						<p align="left"><font size=4 face="Imprint MT Shadow FB" color="#90999c">Report / Registrar Report</font></p>
                  </div>
<div class="col-md-12">

 <div class="panel-body">
    <div style="margin-top: 20px;" class="row">
       <div class="container">
	   
<div class="panel">
             <div class="panel panel-default">
              <div class="panel-heading">
			  <h3 class="panel-title">
		  
			  <div class="size">
<p align="left"><font size=6 face="Imprint MT Shadow FB" color="orange">
<?php
$Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo $new; ?>
</font></p>
                     <form action="#" class="navbar-search form-inline" style="margin-top:6px" method="POST">
                         <div class="required"><p align="left"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Admas University Student Certificate Report </font></p></div>

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
                                  <font size=5 color="#6495ed" Face="Agency FB"><b>Admas University Student Certificate List Report From Registrar Property</b></font>
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
								  </br>
								  </br>
                              <div class="panel-body" style="font-family: times new roman;" >
                                 <div id="divToPrint">
								<div>
								<div class="list-group-item">
								 <h1><center><img src="../images/Picture1.jpg" width=60 height=60><font size=6 color="#6495ed" Face="Agency FB">&nbsp;&nbsp;&nbsp;&nbsp;Admas University Student Certificate List</font>&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/icons.png" width=60 height=60></center></h1>
							   <p align="right">
                                <font color="orange">
                                    <?php
                                     $Today=date('y:m:d');
                                      $new=date('l, F d, Y',strtotime($Today));
                                          echo $new; ?>
                                 </font> </p>
                                  </div>
								  <div style="overflow:auto;">
                                      <table class="table" id="example" border="1" width=100%>
                                    <tr class="active">
                                   <th>SNO</th>
								   <th>IDNO</th>
                                   <th>FNAME</th>
                                   <th>LNAME</th>
								   <th>MNAME</th>
                                   <th>DEPARTMENT</th>
								   <th>Program</th>
								   <th>Certificate_No</th>

                                   </tr>
                                       <?php
									   $i =1;
                                include "../db_config/dbconfig.php";
                                $res=mysqli_query($con,"SELECT* FROM Student,Certificate,Department
											  WHERE Certificate.Idno=Student.Idno and Student.DepID=Department.DepID");
                                while($row=mysqli_fetch_array($res))
                                  {
	                              ?>
                                 <tr>
							   <td class="danger"><p><?php echo $i; ?></p></td>
                               <td ><p><?php echo $row['Idno']; ?></p></td>
                               <td><p><?php echo $row['Fname']; ?></p></td>
                               <td><p><?php echo $row['Mname']; ?></p></td>
							   <td><p><?php echo $row['Lname']; ?></p></td>
							   <td><p><?php echo $row['DepName']; ?></p></td>
							   <td><p><?php echo $row['Program']; ?></p></td>
							   <td><p><?php echo $row['Certificate_No']; ?></p></td>
							   								   

                                </tr>
								
                                  <?php
								  $i++;
                                 }
                                  ?>
								  <tr class="active">
                                                <td colspan=8><b><p align="right">Total number of Student Certificate&nbsp;&nbsp;</b></p></td>
                                                <td><b><?php  echo $numofnotclr+$numofclr;  ?></b></td>
                                        </tr>
                               </table>
                                    </div>
                                 
                                  
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
