<!-- 
======================Group Member==========================
     Fullname                                      ID
1.	Efrata Melekea Adugna........................1900/15
2.	Aschalew Abebe...............................1673/15
3.	Eman Hashim...................................2385/15
4.	Medhin Mehari.................................0348/15
-->


<!-- Admas University online Educational Certificate verification System Code-->
<?php
session_start();
include_once("db_config/dbconfig.php");
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
    <div id="fb-root"></div>
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
              <li class="active"><a href="index.php">Home </a></li>
			  <li class=""><a href="search.php">Check certificate</a></li>
              <li class=""><a href="request.php">Request</a></li>
			  <li class=""><a href="contact.php">Contact</a></li>
              <!--<li class=""><a href="login.php">Login</a></li>!-->
          </ul>
        </section>
		
		
      </nav></div>


    <div id="wrapper">
      <div class="hero">
  <div class="row">
    <div class="large-12 columns">
      <h1><center><font size=14 color="#8c9092" face="Agency FB">Well Come To Admas University Online Educational Certificate Verification System</font></center></h1>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-8 columns">
       <!-- <div class="text-center">
<a class="button icon" id="forum" href="#">        <img width="50" height="50" src="images/logo.png" />
        <span>Admas Online Educational Certificate Verification System</span>
</a>    </div>-->
    <font size=6 color="#555555" >Admas University</font>


<p align="justify">Admas University, which is one of the pioneer Private Higher Education Institutions in Ethiopia, commenced its operation in October 1998 under the name “Admas Business Training Centre.” The Training Centre then started delivering training services in certain tailor-made short-term programmes. By undertaking deep assessments of further training needs and making preparations in terms of the required human and material resources, the centre upgraded itself to a college status as of April 1999, and to the status of a University College as of March 2007. Finally, after ensuring that all the requirements of Higher Education Proclamation No. 650/2009 have been met, the Ministry of Education of F.D.R.E. granted full University status to Admas as of July 2014.
  </div>
  <div class="large-4 columns">
    <aside>
      <h3><a name="mailing_list">
Login to your account</a></h3>

<form action="logincode.php" method="POST">
  <label for='text'>Username</label><input name='username' type='text' required />
  <label for='user_First Name'>Password</label><input name='password' type='password' required />
  <input type='submit' name="login" value=Login class="button" />
    <p><a href='forgetpassword.php'>Forget your password?</a>.</p>
</form>

          </aside>
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
				  <li class="twitter"><a href="https://twitter.com/">Follow us on Twitter</a></li>
				  <li class="facebook"><a href="https://www.facebook.com/admasuniversityethiopia/">Like us on Facebook</a></li>
				  <li class="google"><a href="mailto:teweldino.mvp@gmail.com">Add us to you G+ Circles</a></li>
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
