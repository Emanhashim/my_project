<?php
 include_once("headeroffices.php");
?>
 <link href="../css/form.css" rel="stylesheet" type="text/css" />
               <div class="panel panel-default">
                  <div class="panel-heading">
						<p align="left"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Admin Message</font></p>
						<p align="left"><font size=4 face="Imprint MT Shadow FB" color="#90999c">Message / Admin Message</font></p>
                  </div>
<div class="col-md-12">
<div class="panel-body">
<div style="margin-: 0px;" class="row">
<div class="container">

<div class="panel">
             <div class="panel panel-default">
              <div class="panel-heading">

                     <form action="#" class="navbar-search form-inline" style="margin:0px" method="POST">
								<?php
									include "../db_config/dbconfig.php";
							                $noclearmsg=mysqli_query($con,"SELECT* FROM passwordresethistory where  Status='0'");
                                           $numofmsg1 = mysqli_num_rows($noclearmsg);
                                    ?>
						                

                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								<p align="left"><font size=5 color="Green" face="Imprint MT Shadow FB"><div class="size">
<font color="orange">
<?php
$Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo $new; ?>
</font> 
</div>You have 
                                <i class='glyphicon glyphicon-envelope'></i> <font color="red"><sup><?php echo $numofmsg1;?></sup></font> Password Reset Request From User</font></p><?php $sql=mysqli_query($con,"update passwordresethistory set Status='1'"); ?></a>										
                   	</form>  
              </div>
			  
			  

<div id="collapseTwo" class="panel-collapse collapse">
<fieldset>
<legend>Password Reset Request Ask From User </legend>
  <form name="form2" method="post" action="">
  							    							  <table class="table" align="center" border="1" width="100%" id="example">
                                    <tr class="danger">
                                   <th>SNO</th>
                                   <th>Username</th>
								   <th>Time</th>
								   <th>Action</th>
								   <th>Action</th>
								
								   
                                   </tr>
                                       <?php
									   $i =1;
                                include "../db_config/dbconfig.php";
                                $res=mysqli_query($con,"SELECT* FROM passwordresethistory where  Status='1'");
                                while($row=mysqli_fetch_array($res))
                                  {
	                              ?>
	                            <tr>
							   <td class="danger"><p><?php echo $i; ?></p></td>
                               <td><p><?php echo $row['Username']; ?></p></td>
							   <td><p><?php echo $row['Reset_time']; ?></p></td>
							   <td>&nbsp;<a href='resetpassword.php?slid1=<?php echo $row["Username"]; ?>&reply=to' class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Reset</a></td>
								<td><a href='deletepasswordreset.php?cid=<?php echo $row['Username']; ?>'><img src='../images/delete.png'  onclick="return confirm('Are you sure??')"/></a></td>

				

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
