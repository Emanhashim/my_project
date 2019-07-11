<?php
 include_once("headeroffices.php");
?>
 <link href="../css/form.css" rel="stylesheet" type="text/css" />
               <div class="panel panel-default">
                  <div class="panel-heading">
						<p align="left"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Admin Report</font></p>
						<p align="left"><font size=4 face="Imprint MT Shadow FB" color="#90999c">Report / Admin Report</font></p>
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
                         <div class="required"><p align="left"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Admas University OECVS User History Report </font></p></div>

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
                                  <font size=5 color="#6495ed" Face="Agency FB"><b>User Login and Logout History Report From SystemAdmin Property</font>
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
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
								 <h1><center><img src="../images/Picture1.jpg" width=60 height=60><font size=6 color="#6495ed" Face="Agency FB">&nbsp;&nbsp;&nbsp;&nbsp;Admas University OECVS User Login and Logout History List</font>&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/icons.png" width=60 height=60></center></h1>
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
								   <th>Username</th>
                                   <th>Login Time</th>

                                   </tr>
                                       <?php
									   $i =1;
                                include "../db_config/dbconfig.php";
                                $res=mysqli_query($con,"SELECT * FROM loginhistory");
                                while($row=mysqli_fetch_array($res))
                                  {
	                              ?>
                                 <tr>
							   <td class="danger"><p><?php echo $i; ?></p></td>
                               <td ><p><?php echo $row['Username']; ?></p></td>
                               <td><p><?php echo $row['Login_time']; ?></p></td>	   

                                </tr>
								
                                  <?php
								  $i++;
                                 }
                                  ?>
                               </table>
                                    </div>
									
																	  <div style="overflow:auto;">
                                      <table class="table" id="example" border="1" width=100%>
                                    <tr class="active">
                                   <th>SNO</th>
								   <th>Username</th>
                                   <th>Logout Time</th>

                                   </tr>
                                       <?php
									   $i =1;
                                include "../db_config/dbconfig.php";
                                $res=mysqli_query($con,"SELECT * FROM logouthistory");
                                while($row=mysqli_fetch_array($res))
                                  {
	                              ?>
                                 <tr>
							   <td class="danger"><p><?php echo $i; ?></p></td>
                               <td ><p><?php echo $row['Username']; ?></p></td>
                               <td><p><?php echo $row['Logout_time']; ?></p></td>	   

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
                          
                        </div>
                      <div  class="head"  >
                            <div class="ptitle">
                              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                  <font size=5 color="#6495ed" Face="Agency FB"><b>User Login Fail Report From SystemAdmin Property</b></font>
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
												  function PrintDiv1() {    
                                                   var divToPrint = document.getElementById('divToPrints');
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
        	                       <button onclick="PrintDiv1()" class="btn btn-info btn pull-right" name="report" type="submit" title="Print"style="margin-top:13px;">Print List</button>       
                                  </form>
								  </br>
								  </br>
                              <div class="panel-body" style="font-family: times new roman;" >
                                 <div id="divToPrints">
								<div>
								<div class="list-group-item">
								 <h1><center><img src="../images/Picture1.jpg" width=60 height=60><font size=6 color="#6495ed" Face="Agency FB">&nbsp;&nbsp;&nbsp;&nbsp;Admas University OECVS User LoginFail Report</font>&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/icons.png" width=60 height=60></center></h1>
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
								   <th>Username</th>
                                   <th>LoginFail Time</th>

                                   </tr>
                                       <?php
									   $i =1;
                                include "../db_config/dbconfig.php";
                                $res=mysqli_query($con,"SELECT * FROM LoginFail");
                                while($row=mysqli_fetch_array($res))
                                  {
	                              ?>
                                 <tr>
							   <td class="danger"><p><?php echo $i; ?></p></td>
                               <td ><p><?php echo $row['Username']; ?></p></td>
                               <td><p><?php echo $row['Fail_time']; ?></p></td>	   

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
