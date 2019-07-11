<?php
		
// register user
    if(isset($_POST['AddAccount']))
    {
        $fname=$_POST['Fname'];
        $mname=$_POST['Mname'];
        $lname=$_POST['Lname'];
		$username=$_POST['username'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$sex=$_POST['Sex'];
        $bdate=$_POST['bdate'];
        $role=$_POST['role'];
        $query="SELECT * FROM Account WHERE Username='$username'";
		$qu="SELECT * FROM Account WHERE Email='$email'";
            $res=mysqli_query($con,$query);
			$res1=mysqli_query($con,$qu);
			
            if(mysqli_num_rows($res)>0)
            {
                 echo "<script lang='javascript'> alert('This User Name is Already Registered');</script>";
            
            }
			else if(mysqli_num_rows($res1)>0)
			{
               echo "<script lang='javascript'> alert('This Email Address is Already Registered');</script>";
			}
            else
			{
				if((preg_match("/^[a-zA-Z ]*$/",$fname)) && (preg_match("/^[a-zA-Z ]*$/",$mname)) && (preg_match("/^[a-zA-Z ]*$/",$lname)))
				{
				$bd=strtotime("$bdate");
				$now=time();
				$age=$now-$bd;
				$aa=$age/ 60/60/24/365.25;
				$yage=floor($aa);
				if($yage>=18)
				{
                    $register=mysqli_query($con,"INSERT INTO Account(Fname,Mname,Lname,Username,Email,Phone,Sex,Birth_date,Role) VALUES('$fname','$mname','$lname','$username','$email','$phone','$sex','$bdate','$role')");
                    if($register)
                    {
                        echo "<script lang='javascript'> alert('The User is Successfully Registered');</script>";
                    }
				}else 
				{
				echo "<script lang='javascript'> alert('Your Age is less than 18 Years old Please Re Enter Valid Birth Date');</script>";

				}
				}
				else
				{
					echo "<script lang='javascript'> alert('Please fill Valid Letter!');</script>";

				}
            }
    }
	


?>
