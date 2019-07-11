<?php
 include_once("headeroffices.php");
?>


    <link href="../css/form.css" rel="stylesheet" type="text/css" />
               <div class="panel panel-default">
                  <div class="panel-heading">
						<p align="left"><font size=6 face="Imprint MT Shadow FB" color="#74767d">Registrar Manage</font></p>
						<p align="left"><font size=4 face="Imprint MT Shadow FB" color="#90999c">Manage / Registrar Manage</font></p>
                  </div>
<div class="col-md-12">

 <div class="panel-body">

    <div style="margin-top: 20px;" class="row">
	
<div class="container">
<div class="panel">  
              <div class="panel panel-default">
                  <div class="panel-body">
				 
				   <form action="#" class="navbar-search form-inline" style="margin-top:6px" method="POST">
                                 <div class="required">
            		                  <input type="text" placeholder="Please Enter Certficate Number" name="idn" required><input type="submit" class="success button expand" name="search_R1" value="Search">
                                  <?php   include "controller/search_controller.php";                        ?>
                                   </div>
								   <?php
if (isset($_POST["updprofile"]))
	{
	include_once("../db_config/dbconfig.php");
	$a = $_POST['cno'];
	$b = $_POST['idno'];
    $g = $_POST['gpa'];
    $d = $_POST['endyear'];

		if(!preg_match("/^[a-zA-Z ]*$/",$g))
				{
				$today=date("d/m/y");
                //$diff=date_diff(date_create($d),date_create($today));
				
				//$yr=$diff->y;
				//$age=intval($yr);
				$bd=strtotime("$d");
				$now=time();
				$age=$now-$bd;
				$aa=$age/ 60/60/24/365.25;
				$yage=floor($aa);
				//echo $yage;
				if($yage>=0)
					{
					$val=array("1.5","1.6","1.7","1.8","1.9","2.0","2.1","2.2","2.3","2.4","2.5","2.6","2.7","2.8","2.9","3.0","3.1","3.2","3.3","3.4","3.5","3.6","3.7","3.8","3.9","4.0");
					$value=floatval($val[0]);$value1=floatval($val[1]);$value2=floatval($val[2]);$value3=floatval($val[3]);$value4=floatval($val[4]);$value4=floatval($val[5]);$value5=floatval($val[6]);$value6=floatval($val[7]);$value7=floatval($val[8]);$value8=floatval($val[9]);$value9=floatval($val[10]);$value10=floatval($val[11]);$value11=floatval($val[12]);$value12=floatval($val[13]);$value13=floatval($val[14]);$value14=floatval($val[15]);$value15=floatval($val[16]);$value16=floatval($val[17]);$value17=floatval($val[18]);$value18=floatval($val[19]);$value19=floatval($val[20]);$value20=floatval($val[21]);$value21=floatval($val[22]);$value22=floatval($val[23]);$value23=floatval($val[24]);$value24=floatval($val[25]);
					
					if($g==$value || $g==$value1 || $g==$value2 || $g==$value3 || $g==$value4 || $g==$value5 || $g==$value6 || $g==$value7 || $g==$value8 || $g==$value9 || $g==$value10 || $g==$value11 || $g==$value12 || $g==$value13 || $g==$value14 || $g==$value15 || $g==$value16 || $g==$value17 || $g==$value18 || $g==$value19 || $g==$value20 || $g==$value21 || $g==$value22 || $g==$value23 || $g==$value24)
					{

			$sql = "UPDATE Certificate SET GPA='$g',EndYear='$d' WHERE Certificate_No='$a'";
				if(mysqli_query($con,$sql))
				{
					echo "<strong><font color='Green' size=5 face='Imprint MT Shadow FB'><br>Student Certificate Updated Successfully.</font></strong>";
				}
				else
				{
					echo "<strong><font color='Red' size=5 face='Imprint MT Shadow FB'><br>Student Certificate Not Updated successfully.</font></strong>";
					}
					}
										else
					{
					echo "<script lang='javascript'> alert('The Student GPA is Not Valid Please Re Enter Again!');</script>";
					}
					}
					else{
                        echo "<script lang='javascript'> alert('The End of The Class Year is Not Valid Please Re Enter Again!');</script>";
                   }
					
				}
				
				 else{
                        echo "<script lang='javascript'> alert('The Student GPA is Not Valid Please Re Enter Again!');</script>";
                   }
					

	}
	?>
								   
                   	</form>  
                                   <?php    
                  
                        if(isset($_POST["search_R1"]))
                        {
						?>
							 <fieldset>
							<legend>Welcome To Update Student Certificate Information</legend>
							<div class="col-md-7">
							
							<form name=f5 action="" method=post>
<table width="510" background='images/bg.jpg' border="2" style="margin-left:2px;">
<tr><td colspan="5" align="center"><div class="navigation"><legend class="text-center"><font size=6 face="Imprint MT Shadow FB">   Detail Student Certificate Information</legend></div></td></tr>
<tr><td>Certificate_No</td><td><input type="text" name="cno" size="120" value="<?php echo $responce['Certificate_No']; ?>"   readonly='true'/></td></tr>
<tr><td>IDNO</td><td><input type="text" name="idno" size="120" value="<?php echo $responce['Idno']; ?>"   readonly='true'/></td></tr>
<tr><td>GPA</td><td><input name=gpa type=text size="120" value="<?php echo $responce['GPA']; ?>" /></td></tr>
<tr><td>End Year</td><td><input name=endyear type=text size="120" value="<?php echo $responce['EndYear']; ?>"   /></td></tr>

</table>
</br>
<button type="submit" name="updprofile" id="updprofile" class="btn btn-info btn pull-right">Update Certificate</button></br>
</form>

							
							
							
</fieldset>
<fieldset>
<legend>Welcome To Manage Student Certificate Information</legend>
				  <form class="form-horizontal" role="form" action="" method="post" >
                            <input type="hidden" value="<?php echo $responce['Idno']; ?>" name="Stid"/>
							</br>
                      <select class="btn btn-default" required='' name="op">
                     <option value="">Choose Operation </option>
                    <?php  if($statu=='0'){  ?>            <option value="enable" >Verified Certificate</option><?php   } ?>
                    <?php  if(!$statu=='0'){  ?>            <option value="enable" disabled="" style="color: red;"> Verified Certificate </option><?php   } ?>
                    <?php  if($statu=='0'){  ?>  <option value="disable" disabled="" style="color: red;"> Un Verified Certificate </option><?php   } ?>
                    <?php  if(!$statu=='0'){  ?>  <option value="disable" >Un Verified Certificate</option><?php   } ?>
                     <option value="delete">Delete Certificate</option>
                     </select>

							  <button class="btn btn-default" name="delete_Certificate"><span class="glyphicon glyphicon-ok-circle"></span> Apply</button>
                               <?php   
						}
							   ?>
                       </form>  
                      <?php 
                         include_once('controller/delete_controller.php'); 
                        ?>
						
</fieldset>
						
</fieldset>
</div>
</div>
</div>
							
							</div>
                          </div>

      </form>
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
