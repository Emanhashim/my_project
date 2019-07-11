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


<font size="10px" font=""><center>Welcome To Our System Backup and Recovery</center></font>
<br>
<br>
<form action="" method="POST">
   <center><input type='submit' name="backup" value="Backup Database" class="submit" /></center>
    <center><input type='submit' name="restore" value="Restore Database" class="submit" /></center>

</form>


<?php
//recovery mode backup and restore
if(isset($_POST['backup']))
{

$tables = array();
$result = mysqli_query($con,"SHOW TABLES");
while($row = mysqli_fetch_row($result)){
  $tables[] = $row[0];
}

$return = '';
foreach($tables as $table){
  $result = mysqli_query($con,"SELECT * FROM ".$table);
  $num_fields = mysqli_num_fields($result);
  
  $return .= 'DROP TABLE '.$table.';';
  $row2 = mysqli_fetch_row(mysqli_query($con,"SHOW CREATE TABLE ".$table));
  $return .= "\n\n".$row2[1].";\n\n";
  
  for($i=0;$i<$num_fields;$i++){
    while($row = mysqli_fetch_row($result)){
      $return .= "INSERT INTO ".$table." VALUES(";
      for($j=0;$j<$num_fields;$j++){
        $row[$j] = addslashes($row[$j]);
        if(isset($row[$j])){ $return .= '"'.$row[$j].'"';}
        else{ $return .= '""';}
        if($j<$num_fields-1){ $return .= ',';}
      }
      $return .= ");\n";
    }
  }
  $return .= "\n\n\n";
}

//save file
$handle = fopen("E:\backup\auoecvsdb.sql","w+");
fwrite($handle,$return);
fclose($handle);
echo "<script lang='javascript'> alert('Our System Database Backud up Successfully!');</script>";
}
else if(isset($_POST['restore']))
{

$filename = 'E:\backup\auoecvsdb.sql';
$handle = fopen($filename,"r+");
$contents = fread($handle,filesize($filename));

$sql = explode(';',$contents);
foreach($sql as $query){
  $result = mysqli_query($con,$query);
  if($result){
      echo '<tr><td><br></td></tr>';
      echo '<tr><td>'.$query.' <b>SUCCESS</b></td></tr>';
      echo '<tr><td><br></td></tr>';
  }
}
fclose($handle);
echo "<script lang='javascript'> alert('Our System Database Imported Successfully!');</script>";

	
}
else
{
	
}



?>

</body>
</html>
