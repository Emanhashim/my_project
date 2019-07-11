

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
//Include Database Connection from Db_Config folder
include('db_config/dbconfig.php');
 ?>
 
<?php
session_start();
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
              <li class=""><a href="index.php">Home</a></li>
			  <li class="active"><a href="search.php">Check certificate</a></li>
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
			  <h2>WELCOME TO ADMAS UNIVERSITY</h2>
			  <h4>ONLINE EDUCATIONAL CERTIFICATE VERIFICATION SYSTEM</h4>
			  
			 <form name="" method="post" action="#">
			 
				<input type="text" name="cid" placeholder="Enter Certificate Number" required>
				<input type="submit" class="success button expand" name="search" value="Search"/>
			
			</form>	
			
			</div>
		  </div>
		 
 <?php
							if(isset($_POST['search']))
                                     {
                                    $d=$_POST['cid'];
                                    $sql="select * from Student,Certificate,Department Where Student.Idno=Certificate.Idno and Certificate_No='$d' and Student.DepID=Department.DepID";
                                    $query=mysqli_query($con,$sql);
									if(mysqli_num_rows($query)>0)
                                      {
                                     while($row=mysqli_fetch_array($query))
                                      {
										  $cno=$row["Certificate_No"];
										  $Fname=$row["Fname"];
										  $Mname=$row["Mname"];
										  $Lname=$row["Lname"];
										  $gdate=$row["EndYear"];
										  $FiledofStudy=$row["FiledofStudy"];
										  $Department=$row["DepName"];
										  $gdate=strtotime($gdate);
										  $gdate=date('M D Y');
										  $verify=$row["Verified"];
										  $pic="<img src='registrar/uploads/studentphoto/$row[Photo]' width=100 height=110 style=' width: 100px; height:110px; margin-left:15px; border:1px solid Black;'";
									  }									 
									  if($verify!='0')
										{	
									
					  
?>
	<h3 class="panel-title"><font color="Green" face="Magneto">Detail Student Certificate Information</font></h3>
<div class="form-banner" style="font-family: times new roman;" >
  <div id="form-banner" style=" width: 620px; margin-left: 150px;">
  <div style="border: dashed;background: white;">
    <center>****************************************************<br />
    <img src="images/Picture1.jpg" title="Admas University Logo"width="120" height="120"></br><font color="Black" size="8px" face="CASTLLAR"><b>ADMAS UNIVERSITY</br></b></font>
</br>	
<p align="left">
<?php echo "$pic";?></p>
<p align="right"><?php echo '<b>CertificateNumber:-<u>'."$cno".'</u></b>';?>&nbsp;&nbsp;&nbsp;&nbsp;</p>
<div class="sizeprint2">
	   <h3><font color="Black" face="Copperplate Gothic Light"><b><br>Temporary Certificate of Graduation</br></b></font></h3>
	   <h4><font color="Black" face="Bradley Hand ITC" ><b><br>This is to Certify That</b></font></h3>
        <?php echo '<b><h4>'.$Fname.'&nbsp;'.$Mname.'&nbsp;'.$Lname.'</u></b></h4>'; ?>
		<h4><font color="Black" face="Bradley Hand ITC" ><b>has Graduated from Admas University with <?php echo "$FiledofStudy";?> in <?php echo "$Department";?></br></b></font></h4>
		<h4><font color="Black" face="Bradley Hand ITC" ><b>ON <?php echo "$gdate";?></br></b></font></h4>
        <h4><font color="Black" face="Bradley Hand ITC" ><b><br>This Degree has been given pending the issuance of the original Degree</b></font></h4>

		</center>
		
		
		<p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registerar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;President</p>

		
  <center>****************************************************<br /></center> 
    <?php
	
	}else
		       echo '<h3><img src="images/invalid.png" width="40" height="40">&nbsp;&nbsp;<font color="red">Your Certificate is Not Verified form the registrar <br />Please contact the registrar again.</font></h3>"';
				
	}// 2nd if
	else
	{
          echo '<h3><img src="images/invalid.png" width="40" height="40">&nbsp;&nbsp;<font color="red">Your Certificate Number is Invalid form the registrar <br />Please contact the registrar again.</font></h3>';
    }
	}// first if?>

    </div>
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
              <li class=""><a href="index.php">Home</a></li>
			  <li class="active"><a href="search.php">Check certificate</a></li>
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
