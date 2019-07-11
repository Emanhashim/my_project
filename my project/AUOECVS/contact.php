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
              <li class=""><a href="index.php">Home</a></li>
			  <li class=""><a href="search.php">Check certificate</a></li>
              <li class=""><a href="request.php">Request</a></li>
			  <li class="active"><a href="contact.php">Contact</a></li>
              <!--<li class=""><a href="login.php">Login</a></li>!-->
          </ul>
        </section>
		
		
      </nav></div>


    <div id="wrapper">
      <div class="hero">
  <div class="row">
    <div class="large-12 columns">
     <h3  >Contact Info</h3><p>  Head Office:- Olympia Campus</p> <p><i class="fa fa-phone"></i> Phone:-011-550-8808/10
</p> <p>Email:- academicvp@admasuniversity.edu.et</a></p> <p>Website:-<i class="fa fa-globe"></i><a href="http://www.admasuniversity.edu.et/">www.admasuniversity.edu.et</a></p>
    
	
	<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5572.625016114398!2d38.780669374773765!3d9.023479137135533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b857a588c696b%3A0x3704552a89c3f3ff!2sAdmas+University!5e0!3m2!1sen!2sus!4v1559114031409!5m2!1sen!2sus" width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
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
				  <li class="twitter"><a href="https://twitter.com/">Follow us on Twitter</a></li>
				  <li class="facebook"><a href="https://www.facebook.com/admasuniversityethiopia/">Like us on Facebook</a></li>
				  <li class="google"><a href="mailto:teweldino.mvp@gmail.com">Add us to you G+ Circles</a></li>
				</ul>

				<ul class="inline-list">
              <li class=""><a href="index.php">Home</a></li>
			  <li class=""><a href="search.php">Check certificate</a></li>
              <li class=""><a href="request.php">Request</a></li>
			  <li class="active"><a href="contact.php">Contact</a></li>
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
