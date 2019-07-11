<?php
 include_once("headeroffices.php");
?>
 <link href="../css/form.css" rel="stylesheet" type="text/css" />
               <div class="panel panel-default">
                  <div class="panel-heading">
						<p align="left"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Registrar Campus</font></p>
						<p align="left"><font size=4 face="Imprint MT Shadow FB" color="#90999c">Campus / Registrar Campus</font></p>
                  </div>
				  
				  
				  
				  
				  
<div class="col-md-12">
<div class="panel-body">
<div style="margin-: 0px;" class="row">
<div class="container">

<div class="panel">
             <div class="panel panel-default">
              <div class="panel-heading">

                     <form action="#" class="navbar-search form-inline" style="margin:0px" method="POST">
						                   
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="text-decoration:none;"></a>
<div class="size">
<font color="orange">
<?php
$Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo $new; ?>
</font> 
			  
			  

<div id="collapseOne" class="panel-collapse collapse in"></div>
<fieldset>
<legend>All Campus List </legend>
  <form name="form2" method="post" action="">
  							  <table class="table" align="center" border="1" width="100%" id="example">
                                    <tr class="danger">
                                   <th>SNO</th>
                                   <th>Campus Name</th>
								   <th>Action</th>
								   <th>Action</th>
                                   </tr>
                                       <?php
									   $i =1;
                                include "../db_config/dbconfig.php";
                                $res=mysqli_query($con,"SELECT* FROM Campus");
                                while($row=mysqli_fetch_array($res))
                                  {
	                              ?>
	                            <tr>
							   <td class="danger"><p><?php echo $i; ?></p></td>
                               <td><p><?php echo $row['CampusName']; ?></p></td>
							   <td>&nbsp;<a href='updatecampus.php?slid1=<?php echo $row["CampusID"]; ?>&reply=to' class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Update</a></td>
							   <td><a href='deletecampus.php?sid=<?php echo $row['CampusID']; ?>'><img src='../images/delete.png'  onclick="return confirm('Are you sure You want to Remove Campus from Student information??')"/></a></td>


                                </tr>
                                  <?php
								  $i++;
                                 }
                                  ?>
                               </table>
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
            <!--/span-->
        </div>
        <!--/row-->

    </div>
</div>

<hr/></font>
 
<?php
 include_once("footer.php");
?>
