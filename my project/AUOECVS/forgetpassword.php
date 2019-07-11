<!-- 
======================Group Member==========================
     Fullname                                      ID
1.	Efrata Melekea Adugna........................1900/15
2.	Aschalew  Abebe...............................1673/15
3.	Eman Hashim...................................2385/15
4.	Medhin Mehari.................................0348/15
-->


<!-- Admas University online Educational Certificate verification System Code-->
<?php
session_start();
include('db_config/dbconfig.php');
if(isset($_POST['send'])){
	include_once("db_config/dbconfig.php");
	//retrieving attribute from the form request table and store into variables.
	$Email=$_POST['email'];
	$sq="Select * from Account where Email='$Email'";
	$res=mysqli_query($con,$sq);
	if(mysqli_num_rows($res)>0)
	{
		while($row = mysqli_fetch_array($res))
                        {
                          $ID= $row['Username'];
                        }
			$sql = "INSERT INTO passwordresethistory (Username) VALUES ('$ID');";
			$query = mysqli_query($con, $sql);
			if($query)
				{
				echo "<script lang='javascript'> alert('Reset Send Successfully'); </script>";
				}
	}
	else
	{
		echo "<script lang='javascript'> alert('This Email Address is Not Register');</script>";

	}
	

}				   
?>
 
<html>
<head>
    <meta charset="utf-8">
	
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- This is Titile of This Web Page -->
    <title>Admas Online Educational Certificate Verification System</title>
	
	<!-- This is Keyword to Search on Using like Google search engine---->
    <meta name="description" content="Admas University OECVS is an easy to check and verify each student educational certificate." />
    <meta name="keywords" content="Admas, OECVS" />
	 
	<!-- This is stylesheet link from External Stylesheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	
	<!-- This is Icon of Our Webpage link from Images folder -->
    <link href="images/logo.png" rel="icon" type="image/png" />
</head>

<!-- index class in body -->
<body class="index">
  

	<div class="contain-to-grid">
	  <!-- Navigation Class Top Bar -->

      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><a href="index.php"><img src="images/admas-logo.png" width="284" height="74"></a></h1>
          </li>
          <li class="toggle-topbar menu-icon">
            <a href="#">
              <span>Menu</span>
            </a>
          </li>
        </ul>


		 <!--  In Navigation Class Section class top-bar-section -->
        <section class="top-bar-section">
          <!-- Right Class Navigation in Section class top-bar-section -->
          <ul class="right">
              <li class="active"><a href="index.php">Home</a></li>
			  <li class=""><a href="search.php">Check certificate</a></li>
              <li class=""><a href="request.php">Request</a></li>
			  <li class=""><a href="contact.php">Contact</a></li>
              <!--<li class=""><a href="login.php">Login</a></li>!-->
          </ul>
        </section>
		
		
      </nav></div>

	  
<!-- Wrapper id,here class,row class, -->
<div id="wrapper">
	<div class="hero">
		  <div class="row">
		  </div>
		  
		  <!-- Form-banner id -->
		  <div id="form-banner" class="row panel">
		  <div class="row">
			<div class="large-12 columns">
			  <h2>Password Reset Form</h2>
			  
			 <form name="RequestForm" method="post" action="#">
			 
				<input type="Email" name="email" placeholder="Enter Email Address" required>
				<input type="submit" class="success button expand" name="send" value="Send">
				<input type="reset" class="success button expand" name="reset" value="Reset">
			
			</form>	
			
			</div>
		  </div>
		</div>
		
	</div>
	
</div>


<!-- this is footer -->
<footer>
      <div class="row">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-8 columns">
				<ul class="social">
				  <li class="twitter"><a href="https://twitter.com/admasuniversityethiopia/">Follow us on Twitter</a></li>
				  <li class="facebook"><a href="https://www.facebook.com/admasuniversityethiopia/">Like us on Facebook</a></li>
				  <li class="google"><a href="https://plus.google.com/admasuniversityethiopia/">Add us to you G+ Circles</a></li>
				</ul>

				<ul class="inline-list">
              <li class="active"><a href="index.php">Home</a></li>
			  <li class=""><a href="search.php">Check certificate</a></li>
              <li class=""><a href="request.php">Request</a></li>
			  <li class=""><a href="contact.php">Contact</a></li>
              <!--<li class=""><a href="login.php">Login</a></li>!-->

				</ul>
            </div>
            <div class="large-4 columns">
              <p class="text-right">Copyright &copy; 2019, ADMAS UNIVERSITY GROUP 6</p>
            </div>
          </div>
        </div>
      </div>
</footer>

<!-- this is javascript link from js folder -->
    <script src="js/js.js" type="text/javascript"></script>
</body>
</html>
