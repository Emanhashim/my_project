<?php

 class Delete {

     function delete_U($un) 
     {
		 include "../db_config/dbconfig.php";
          $sql=mysqli_query("delete from account where Username='$un'");
                            if($sql)
                            {
                                echo "<strong><font color='Green' size=5 face='Imprint MT Shadow FB'><br>Delete User!.</font></strong>";

                            }
                            else
                            {
                                echo "coudn't delete the user";
                            }
        
    }
	
	//Delete Student Opration 
    function delete_S($sid) 
     {
        
include "../db_config/dbconfig.php";
          $sqli=mysqli_query($con,"delete from Certificate where Idno='$sid'");
          $sqli1=mysqli_query($con,"delete from student where Idno='$sid'");
                            if($sqli and $sqli1)
                            {
                                echo "</br>Successfully deleted";
                            }
                            else
                            {
                                echo "coudn't delete the student";
                            }
        
    }
	
	//Delete Certificate Operation
	    function delete_Certificate($sidd) 
     {
        
include "../db_config/dbconfig.php";
          $sqli=mysqli_query($con,"delete from Certificate where Idno='$sidd'");
          $sqli1=mysqli_query($con,"Update student set Verified='0' Where Idno='$sidd'");
                            if($sqli==$sqli1)
                            {
								echo "<strong><font color='Green' size=5 face='Imprint MT Shadow FB'><br>Student Certificate Delete Successfully.</font></strong>";
       
                            }
                            else
                            {
                                echo "coudn't delete the student";
                            }
        
    }
	
	
	
	//Desable Certificate Operation
	function disablec($sidd) 
     {
		 include "../db_config/dbconfig.php";
          $sqli=mysqli_query($con,"update Certificate set Verified='0' where Idno='$sidd'");
		  $sqli1=mysqli_query($con,"Update Student set Verified='0' where Idno='$sidd'");
                            if($sqli and $sqli1)
                            if($sqli)
                            {
								echo "<strong><font color='Green' size=5 face='Imprint MT Shadow FB'><br>Student Certificate Un Verified!.</font></strong>";
                            }
                            else
                            {
                                echo "coudn't Verified the Certificate";
                            }
        
    }
	function disable($sid) 
     {
		 include "../db_config/dbconfig.php";
          $sqli=mysqli_query($con,"update Student set Status='0' where Idno='$sid'");
                            if($sqli)
                            {
                                echo "</br>Successfully Disabled";
                            }
                            else
                            {
                                echo "coudn't Disable the student account";
                            }
        
    }
	function enablec($sidd) 
     {
		 include "../db_config/dbconfig.php";
          $sqli=mysqli_query($con,"Update Certificate set Verified='1' where Idno='$sidd'");
		  $sqli1=mysqli_query($con,"Update Student set Verified='1' where Idno='$sidd'");
                            if($sqli and $sqli1)
                            {
								echo "<strong><font color='Green' size=5 face='Imprint MT Shadow FB'><br>Student Certificate Verified Successfully.</font></strong>";
                            }
                            else
                            {
                                echo "coudn't Verified the Student Certificate";
                            }
        
    }
	function enable($sid) 
     {
		 include "../db_config/dbconfig.php";
          $sqli=mysqli_query($con,"update Student set Status='1' where Idno='$sid'");
                            if($sqli)
                            {
                                echo "</br>Successfully Enabled";
                            }
                            else
                            {
                                echo "coudn't Enable the student account";
                            }
        
    }
	
	function disableu($un) 
     {
		 include "../db_config/dbconfig.php";
          $sqli=mysqli_query($con,"update account set status='0' where Username='$un'");
                            if($sqli)
                            {
                                echo "<strong><font color='Green' size=5 face='Imprint MT Shadow FB'><br>Desable Account.</font></strong>";

                            }
                            else
                            {
                                echo "coudn't Disable the User account";
                            }
        
    }
	function enableu($un) 
     {
		  include "../db_config/dbconfig.php";
          $sqli=mysqli_query($con,"update account set status='1' where Username='$un'");
                            if($sqli)
                            {
                                echo "<strong><font color='Green' size=5 face='Imprint MT Shadow FB'><br>Enable Account!.</font></strong>";

                            }
                            else
                            {
                                echo "coudn't Enable the User account";
                            }
        
    }
}