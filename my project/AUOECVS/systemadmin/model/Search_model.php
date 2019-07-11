
<?php 

class Search {

    function __construct() {
        
    }
	//function Student Search
	function Search_R($stud_ID) 
    {
		include "../db_config/dbconfig.php";
        $sql_S="select * from Student where Idno='$stud_ID'";
                        $sr=mysqli_query($con,$sql_S);
                        $row = mysqli_fetch_array($sr);
                        $result = mysqli_num_rows($sr);
                        if($result > 0)
                        {
                            return $row;
                        }
                        else 
                        {
                            return 0;
                            
                        }
    }
	//function Certificate Search
	function Search_R2($CertNo) 
    {
		include "../db_config/dbconfig.php";
        $sql_S="select * from Certificate where Idno='$CertNo'";
                        $sr=mysqli_query($con,$sql_S);
                        $row = mysqli_fetch_array($sr);
                        $result = mysqli_num_rows($sr);
                        if($result > 0)
                        {
                            return $row;
                        }
                        else 
                        {
                            return 0;
                            
                        }
    }
    function Search_U($usname) 
    {
		include "../db_config/dbconfig.php";
        $sql_S="select * from account where Username='$usname'";
                        $sr=mysqli_query($con,$sql_S);
                        $row = mysqli_fetch_array($sr);
                        $result = mysqli_num_rows($sr);
                        if($result > 0)
                        {
                            return $row;
                        }
                        else 
                        {
                            return 0;
                            
                        }
    }
	    function Search_D($CertNo) 
    {
        include "../db_config/dbconfig.php";
        $sql_S="select * from Student where Idno='$CertNo'";
                        $sr=mysqli_query($con,$sql_S);
                        $row = mysqli_fetch_array($sr);
                        $result = mysqli_num_rows($sr);
                        if($result > 0)
                        {
                            return $row;
                        }
                        else 
                        {
                            return 0;
                            
                        }
    }
        function Search_C($stud_ID) 
    {
        include "../db_config/dbconfig.php";
        $sql_S="select * from Student where Idno='$stud_ID'";
                        $sr=mysqli_query($con,$sql_S);
                        $row = mysqli_fetch_array($sr);
                        $result = mysqli_num_rows($sr);
                        if($result > 0)
                        {
                            return $row;
                        }
                        else 
                        {
                            return 0;
                            
                        }
    }
   
}
?>