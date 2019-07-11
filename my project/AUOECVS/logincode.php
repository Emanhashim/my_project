
<?php
//Start session
session_start();

if(isset($_POST['login'])){

	//Connect to mysql server
	include_once("db_config/dbconfig.php");
	
	
	//retrieving username and password from the form and store into variables.
	$username=$_POST['username'];
	$password=md5($_POST['password']);//md5 encription code use
	
	//checking username and password in the database
	$sql = "select * from account where Username='$username' and password='$password'";
	
    $query = mysqli_query($con, $sql);
	
	//to count number of rows
	$result=mysqli_num_rows($query); //
	if($result>0)
	{
		while($row = mysqli_fetch_array($query))
                        {
                          $user_role= $row['Role'];
						  $usr= $row['Username'];
						  $pss= $row['Password'];
						  $stat= $row['status'];
                        }
										if($stat==1)
										{
											if($user_role=='registrar')
											{
											//session stored
											$_SESSION['SESS_MEMBER_ID'] = $pss;
			                                $_SESSION['SESS_FIRST_NAME'] = $usr;
											session_write_close();
											//Login History Add
											$sql1=mysqli_query($con,"Insert into loginhistory(Username)values('$username')");
											header('Location:registrar/registrar.php');
											exit();
											}
											elseif($user_role=='systemadmin')
											{
											$_SESSION['SESS_MEMBER_ID'] = $pss;
			                                $_SESSION['SESS_FIRST_NAME'] = $usr;
											session_write_close();
											$sql1=mysqli_query($con,"Insert into loginhistory(Username)values('$username')");
											header("Location: Systemadmin/systemadmin.php");
											exit();
											}
											else
											{
												//loginfail Add
												$sql1=mysqli_query($con,"Insert into loginfail(Username)values('$username')");
	                                             ?>
									            <script>
                                                 alert('YOUR USER NAME AND PASSWORD IS NOT MATCH WITH YOUR ROLE Tray again');
                                                 window.location='index.php';
                                                </script>
								                <?php
											}
                                        }
										else
										{
                                        $sql1=mysqli_query($con,"Insert into loginfail(Username)values('$username')");											
										?>
										  <script>
                                           alert('Your account is disabled Please Contact the Administrator!!! and Tray again');
                                           window.location='index.php';
                                           </script>
									    <?php	
									    }
								}
                                else
                                { 
								$sql1=mysqli_query($con,"Insert into loginfail(Username)values('$username')");
                                ?>
									<script>
                                    alert('Incorrect USER NAME or PASSWORD Pls match and Try again ');
                                    window.location='index.php';
                                    </script>
								<?php								   
    							}
           }
        ?>
                                
      