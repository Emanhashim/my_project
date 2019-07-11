<?php

 class Delete {

 //delete username
     function delete_U($un) 
     {
		 include "../db_config/dbconfig.php";
          $sql=mysqli_query($con,"delete from account where Username='$un'");
                            if($sql)
                            {
                                echo "<strong><font color='Green' size=5 face='Imprint MT Shadow FB'><br>Delete User!.</font></strong>";

                            }
                            else
                            {
                                echo "coudn't delete the user";
                            }
        
    }
	
//Disable Username
	
	function disableu($un) 
     {
		 include "../db_config/dbconfig.php";
          $sqli=mysqli_query($con,"update account set status='0' where Username='$un'");
                            if($sqli)
                            {
                                echo "<strong><font color='Green' size=5 face='Imprint MT Shadow FB'><br>Disable Account.</font></strong>";

                            }
                            else
                            {
                                echo "coudn't Disable the User account";
                            }
        
    }
	
	//enable username
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