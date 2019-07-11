<?php

include 'model/Search_model.php';
//Search Student
if (isset($_POST['search_R'])) { //button search name 
    $stud_ID = $_POST['stud_ID']; //from input type name assign it
    $search_STR = new Search();
    $Reg_res = $search_STR->Search_R($stud_ID); //call varible then assign
    $Reg_res1 = $search_STR->Search_C($stud_ID);
    $responce['Fname'] = $Reg_res['Fname'];
    $responce['Mname'] = $Reg_res['Mname'];
    $responce['Lname'] = $Reg_res['Lname'];
    $responce['Sex'] = $Reg_res['Sex'];
    $responce['Idno'] = $Reg_res['Idno'];
	$responce['Phone'] = $Reg_res['Phone'];
	$responce['Email'] = $Reg_res['Email'];
	$responce['Birth_date'] = $Reg_res['Birth_date'];
	$responce['Program'] = $Reg_res['Program'];
    $responce['Year'] = $Reg_res['Year'];
	$responce['CampusName'] = $Reg_res['CampusName'];
    $responce['Department'] = $Reg_res['Department'];
	$responce['Photo'] = $Reg_res['Photo'];
    $statu=$responce['Status'] = $Reg_res['Status'];
     if($statu=='0')
    {
        echo '<div style="color:red;"> This Student is not active!</div>';
    }
        if($Reg_res=='0' and $Reg_res1=='0')
        {
            echo "<label style='color:red;'>Couldn't Find Student Detail with this ID</label>";
        }
    
}

//Search Certificate
if (isset($_POST['search_R1'])) { //button search name
    $CertNo = $_POST['idn']; //from inpu type name assign it
    $search_STR = new Search();
    $Reg_re = $search_STR->Search_R2($CertNo); //call varible then assign
    $Reg_res1 = $search_STR->Search_D($CertNo);
    $responce['Certificate_No'] = $Reg_re['Certificate_No'];
    $responce['Idno'] = $Reg_re['Idno'];
	$responce['GPA'] = $Reg_re['GPA'];
	$responce['EndYear'] = $Reg_re['EndYear'];
    $statu=$responce['Verified'] = $Reg_re['Verified'];
     if($statu=='0')
    {
        echo '<div style="color:red;"> This Certificate is not Verified!</div>';
    }
        if($Reg_re=='0' and $Reg_res1=='0')
        {
            echo "<label style='color:red;'>Couldn't Find Certificate Detail with this ID</label>";
        }
    
}

//Search Account User
if (isset($_POST['Search_user'])) {
    $usname = $_POST['usn'];
    $search_usr = new Search();
    $Reg_res = $search_usr->Search_U($usname);
	$fn = $responce['Username'] = $Reg_res['Username'];
    $fn = $responce['Fname'] = $Reg_res['Fname'];
    $mn = $responce['Mname'] = $Reg_res['Mname'];
    $ln = $responce['Lname'] = $Reg_res['Lname'];
	$email = $responce['Email'] = $Reg_res['Email'];
	$phone = $responce['Phone'] = $Reg_res['Phone'];
	$bd = $responce['Birth_date'] = $Reg_res['Birth_date'];
    $s	= $responce['Sex'] = $Reg_res['Sex'];
    $rol = $responce['Role'] = $Reg_res['Role'];
	$statu=$responce['status'] = $Reg_res['status'];
	 if($statu=='0')
    {
        echo '<div style="color:red;"> This User is not active!</div>';
    }
    if($Reg_res=='0')
    {
        echo '<div style="color:red;"> Couldnt Find</div>';
    }
}
?>
