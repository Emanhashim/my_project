<?php
 include_once("headeroffices.php");
?>
 <link href="../css/form.css" rel="stylesheet" type="text/css" />
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
                                  <font size=5 color="#6495ed" Face="Agency FB"><b>Admas University Registrar Student Report</b></font>
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <?php
								  include "../db_config/dbconfig.php";
                                        	$noclear=mysqli_query($con,"select * from Student where Sex='Male'");
                                            $notclear=mysqli_query($con,"select * from Student where Sex='Female'");
											$noregular=mysqli_query($con,"select * from Student where Program='Regular'");
											$noextension=mysqli_query($con,"select * from Student where Program='Extension'");
                                           $numofclr = mysqli_num_rows($noclear);
                                           $nore = mysqli_num_rows($noregular);
										   $noex = mysqli_num_rows($noextension);
                                           $numofnotclr = mysqli_num_rows($notclear);
                                        
                                    ?>
                                  <div class="table table-hover" overflow="auto">
                                      <table class="table" id="example">
                                        <tr class="active">
                                                <th>No.</th>
                                                <th>Title</th>
                                                <th>Quantity</th>
                                        </tr>
                                        <tr>
                                                <td>1. </td>
                                                <td>Number of Male Student</td>
                                                <td><?php  echo $numofclr;  ?></td>
                                        </tr>
                                        <tr>
                                                <td>2. </td>
                                                <td>Number of Female Student</td>
                                                <td><?php  echo $numofnotclr;  ?></td>
                                        </tr>
										<tr>
                                                <td>3. </td>
                                                <td>Number of Reqular Student</td>
                                                <td><?php  echo $nore;  ?></td>
                                        </tr>
										<tr>
                                                <td>4. </td>
                                                <td>Number of Extension Student</td>
                                                <td><?php  echo $noex;  ?></td>
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
                                  <font size=5 color="#6495ed" Face="Agency FB"><b>Admas University Student List Report From Registrar Property</b></font>
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
								 <h1><center><img src="../images/Picture1.jpg" width=60 height=60><font size=6 color="#6495ed" Face="Agency FB">&nbsp;&nbsp;&nbsp;&nbsp;Admas University Student List</font>&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/icons.png" width=60 height=60></center></h1>
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
								   <th>MNAME</th>
                                   <th>LNAME</th>
								   <th>Phone</th>
								   <th>Email</th>
								   <th>Starting Year</th>
                                   <th>DEPARTMENT</th>
								   <th>Campus Name</th>
								   <th>Program</th>
								   <th>Photo</th>

                                   </tr>
                                       <?php
									   $i =1;
                                include "../db_config/dbconfig.php";
                                $res=mysqli_query($con,"SELECT * FROM Student,Department,Campus where Student.CampusID=Campus.CampusID and Department.DepID=Student.DepID");
                                while($row=mysqli_fetch_array($res))
                                  {
	                              ?>
                                 <tr>
							   <td class="danger"><p><?php echo $i; ?></p></td>
                               <td ><p><?php echo $row['Idno']; ?></p></td>
                               <td><p><?php echo $row['Fname']; ?></p></td>
                               <td><p><?php echo $row['Mname']; ?></p></td>
							   <td><p><?php echo $row['Lname']; ?></p></td>
							   <td><p><?php echo $row['Phone']; ?></p></td>
							   <td><p><?php echo $row['Email']; ?></p></td>
							   <td><p><?php echo $row['Year']; ?></p></td>
							   <td><p><?php echo $row['DepName']; ?></p></td>
							   <td><p><?php echo $row['CampusName']; ?></p></td>
							   <td><p><?php echo $row['Program']; ?></p></td>
							   <td><p><?php echo  "<img src='uploads/studentphoto/$row[Photo]' width='50' height='50'"; ?></p></td>					   

                                </tr>
								
                                  <?php
								  $i++;
                                 }
                                  ?>
								  <tr class="active">
                                                <td colspan=11><b><p align="right">Total Number of Student &nbsp;&nbsp;</b></p></td>
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
