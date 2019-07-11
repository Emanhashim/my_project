<?php

// register Certificate
    if(isset($_POST['AddCertificate']))
    {
		$c=$_POST['cid'];
        $idn=$_POST['idno'];
        $g=$_POST['gpa'];
		$endy=$_POST['endyear'];
        $qr="SELECT * FROM Certificate WHERE Idno='$idn' or Certificate_No='$c'" ;
		$qr1="SELECT * FROM Student WHERE Idno='$idn' or Idno='$idn'" ;
            $res=mysqli_query($con,$qr);
			$res1=mysqli_query($con,$qr1);
			if(mysqli_num_rows($res1)==1)
			{
            if(mysqli_num_rows($res)>0)
            {
                 echo "<script lang='javascript'> alert('This Student Certificate is Already Registered');</script>";
            }
            else{
				if(!preg_match("/^[a-zA-Z ]*$/",$g))
				{
				$bd=strtotime("$edny");
				$now=time();
				$age=$now-$bd;
				$aa=$age/ 60/60/24/365.25;
				$yage=floor($aa);
					if($yage>=0)
					{
					$val=array("1.5","1.6","1.7","1.8","1.9","2.0","2.1","2.2","2.3","2.4","2.5","2.6","2.7","2.8","2.9","3.0","3.1","3.2","3.3","3.4","3.5","3.6","3.7","3.8","3.9","4.0");
					$value=floatval($val[0]);$value1=floatval($val[1]);$value2=floatval($val[2]);$value3=floatval($val[3]);$value4=floatval($val[4]);$value4=floatval($val[5]);$value5=floatval($val[6]);$value6=floatval($val[7]);$value7=floatval($val[8]);$value8=floatval($val[9]);$value9=floatval($val[10]);$value10=floatval($val[11]);$value11=floatval($val[12]);$value12=floatval($val[13]);$value13=floatval($val[14]);$value14=floatval($val[15]);$value15=floatval($val[16]);$value16=floatval($val[17]);$value17=floatval($val[18]);$value18=floatval($val[19]);$value19=floatval($val[20]);$value20=floatval($val[21]);$value21=floatval($val[22]);$value22=floatval($val[23]);$value23=floatval($val[24]);$value24=floatval($val[25]);
					
					if($g==$value || $g==$value1 || $g==$value2 || $g==$value3 || $g==$value4 || $g==$value5 || $g==$value6 || $g==$value7 || $g==$value8 || $g==$value9 || $g==$value10 || $g==$value11 || $g==$value12 || $g==$value13 || $g==$value14 || $g==$value15 || $g==$value16 || $g==$value17 || $g==$value18 || $g==$value19 || $g==$value20 || $g==$value21 || $g==$value22 || $g==$value23 || $g==$value24)
					{
                    $register=mysqli_query($con,"INSERT INTO Certificate(Certificate_No,Idno,GPA,EndYear) VALUES('$c','$idn',$g,'$endy')");
                    if($register)
                    {
                        echo "<script lang='javascript'> alert('The Student Certificate is Successfully Registered');</script>";
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
			}else
			{
				echo "<script lang='javascript'> alert('This Student IDNO is Not Register');</script>";
			}
    }
// register student
    if(isset($_POST['AddStudent']))
    {
        $fn=$_POST['fname'];
		$mn=$_POST['mname'];
		$ln=$_POST['lname'];
        $gender=$_POST['gender'];
		$bdate=$_POST['bdate'];
		$idno=$_POST['idno'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
        $year=$_POST['year'];
        $fstudy=$_POST['fstudy'];
		$program=$_POST['program'];
		$imagename = $_FILES['profilepic']['name'];
		$imgname = rand().$_FILES['profilepic']['name'];

		move_uploaded_file($_FILES['profilepic']['tmp_name'],"uploads/studentphoto/". $imgname);
        $query="SELECT * FROM Student WHERE Idno='$idno'";
		$qu="SELECT * FROM Student WHERE Email='$email'";
			$res1=mysqli_query($con,$qu);
            $res=mysqli_query($con,$query);
            if(mysqli_num_rows($res)>0)
            {
                 echo "<script lang='javascript'> alert('This Student IDNO is Already Registered');</script>";
            
            }
			else if(mysqli_num_rows($res1)>0)
			{
               echo "<script lang='javascript'> alert('This Email Address is Already Registered');</script>";
			}
            else
			{
			if((preg_match("/^[a-zA-Z ]*$/",$fn)) && (preg_match("/^[a-zA-Z ]*$/",$ln)) && (preg_match("/^[a-zA-Z ]*$/",$mn)) && (preg_match("/^[a-zA-Z ]*$/",$mn)) && (preg_match("/^[a-zA-Z ]*$/",$fstudy)))
				{
				
				$bd=strtotime("$bdate");
				$now=time();
				$age=$now-$bd;
				$aa=$age/ 60/60/24/365.25;
				$yage=floor($aa);
				if($yage>=18)
				{
					if(strlen($phone)==10)
					{
					$dep=$_POST['department'];
					$sql="Select * from Department where DepName='$dep'";
					$result=mysqli_query($con,$sql);
					if($result)
					{
						while($row=mysqli_fetch_array($result))
                                  {
									$DID=$row['DepID'];
								  }
					$camp=$_POST['campus'];
					$sql1="Select * from Campus where CampusName='$camp'";
					$result1=mysqli_query($con,$sql1);
								  if($result1)
								  {
						while($rows=mysqli_fetch_array($result1))
                                  {
									$CID=$rows['CampusID'];
								  }
                    $register=mysqli_query($con,"INSERT INTO Student(Fname,Mname,Lname,Sex,Birth_date,Idno,Phone,Email,CampusID,Year,DepID,FiledofStudy,Program,Photo)VALUES('$fn','$mn','$ln','$gender','$bdate','$idno','$phone','$email','$CID','$year','$DID','$fstudy','$program','$imgname')");
                    if($register)
                    {
                        echo "<script lang='javascript'> alert('The Student is Successfully Registered');</script>";
                    }
								  }
					}
					}
					else 
					{
					echo "<script lang='javascript'> alert('Your Phone Number is less than 10 Digit old Please Re Enter Again!');</script>";	
					}
				}
				else 
				{
				echo "<script lang='javascript'> alert('Your Age is less than 18 Years old Please Re Enter Valid Birth Date');</script>";
				}
               }else 
			   {
				 	echo "<script lang='javascript'> alert('Please fill Valid Letter!');</script>";
			   }
			}
    }

		

 //Add Department
     if(isset($_POST["Add_dep"])){
	   $yr= $_POST['yr'];
	   $dname= $_POST['Dname'];
	   $query="SELECT * FROM department WHERE DepName='$dname'";
        $res=mysqli_query($con,$query);
            if(mysqli_num_rows($res)>4)
			  {
                echo "<script lang='javascript'> alert('This Department is Already Registered');</script>";
              }
                else{
					$camp=$_POST['campus'];
					$sql1="Select * from Campus where CampusName='$camp'";
					$result1=mysqli_query($con,$sql1);
								  if($result1)
								  {
						while($rows=mysqli_fetch_array($result1))
                                  {
									$CID=$rows['CampusID'];
								  }
					
					
            	   $register="INSERT INTO department(CampusID,DepName,Year) VALUES('$CID','$dname','$yr')";
				   $registers=mysqli_query($con,$register);
				   if(preg_match("/^[a-zA-Z ]*$/",$dname))
				   {
                    if($register)
                    {
                       echo "<script lang='javascript'> alert('Successfully Add Department');</script>";
                    }
	               }
								  }
				   else
				   {
					   echo "<script lang='javascript'> alert('Please fill Valid DepartmentName!');</script>";
 
				   }
				}
	}
	
	//Add Campus
    	 if(isset($_POST["Add_Campus"]))
     {
	   $Cname= $_POST['Cname'];
        $query="SELECT * FROM Campus WHERE CampusName='$Cname'";
         $res=mysqli_query($con,$query);
            if(mysqli_num_rows($res)>0)
            {
                echo "<script lang='javascript'> alert('This Campus is Already Registered');</script>";
            }
                else{
            	   $register="INSERT INTO Campus(CampusName) VALUES('$Cname')";
				   $registers=mysqli_query($con,$register);
				   if(preg_match("/^[a-zA-Z ]*$/",$Cname))
				   {
                    if($registers)
                    {
                        echo "<script lang='javascript'> alert('Successfully Add Campus');</script>";
                    }
				   }
				   else
				   {
					 echo "<script lang='javascript'> alert('Please fill Valid CampusName!');</script>";
   
				   }
				}
				   
	               
	}

?>
