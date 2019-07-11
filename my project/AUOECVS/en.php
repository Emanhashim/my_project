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

	
	<!-- This is Icon of Our Webpage link from Images folder -->
    <link href="images/logo.png" rel="icon" type="image/png" />
	<style>
body{
margin:0 auto;
width:980px;
height:500px;
background:#fff;
padding-top:20px;
font-size:14px
}
	.submit{
color:#fff;
border-radius:3px;
background:#1F8DD6;
padding:10px;
cursor:hand;
margin:10px;
border:none;
width:200px;
height:50px;
box-shadow:0 0 1px 2px #123456;
font-size:24px
}
	</style>
</head>

<!-- index class in body -->
<body>
    
<br>
<br>


<font size="10px" font=""><center>Welcome To Our System Encrypt or Decryption</center></font>
<br>
<br>
<form action="" method="POST">
  <center><input type="text" name="ntext" placeholder="Enter your text" class="submit" required>
 <input type='submit' name="encrypt" value="Encrypt Text" class="submit" />

</form>
<?php
if(isset($_POST['encrypt']))
{
 $enc=$_POST['ntext'];
  $out=md5($_POST['ntext']);
  echo "<br> Your Normal Text Encryption is ".$out."<br>";
  echo "<br> Your Normal Text Here ".$enc."<br>";
}

?>

</body>
</html>
