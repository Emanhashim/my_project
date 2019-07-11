<?php
session_start();
if(!isset($_SESSION['SESS_MEMBER_ID']))
{
?>
 <script>
  alert('YOU ARE NOT ALLOWED TO ACCESS!!Please Login to access the page');
  window.location='../index.php';
 </script>
<?php
}
 include_once("../db_config/dbconfig.php");
?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admas University System Admin</title>
    <link href="Content/css?v=p1p8Od3giL3Zu1WIAs2eVHs3spatD3cNkxWdcWdloTc1" rel="stylesheet"/>
	 <link href="Content/kendo/cssbb26.css?v=ybVhnUMy2kJwEQA4OfDCyYx368UqFqviZ1zDESaAHk01" rel="stylesheet"/>
   <script src="bundles/jqueryc061?v=FVs3ACwOLIVInrAl5sdzR2jrCDmVOWFbZMY6g6Q0ulE1"></script>
    <script src="bundles/bootstrapf484?v=jOiyZqvzQqgSlv8Xo5vJVDpVKZ6vdx7HW394ityDLsw1"></script>
    <script src="bundles/kendo940f?v=kbNLlGxiOzF5Z63fmaRuBLNVHDyW6MTZrLrKWx2TdpQ1"></script>
    <link type="text/css" href="Content/Custom/aauCustom.css"  rel="stylesheet"/>
    <link rel="stylesheet" href="/Content/EthiopianCalendar/redmond.calendars.picker.css">
	 <link rel="stylesheet" type="text/css" href="sty.css">
	 <link rel="shortcut icon"href="../images/logo.png" />
</head>
<body> 
     <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container header">
            <div class="navbar-header">
                
                <a class="navbar-brand" href=''>
                    
                    <img src="../images/admaslogo.jpg" style="width: 100% "/>
                </a>
            </div>
            <div class="navbar-collapse collapse">


            </div>
        </div>
    </div>
            






<nav class="navbar navbar-fixed-top navbar-inverse menubar" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
	<!--<img src="../images/admas-logo.png" height="50px">-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navBarCol">
        <ul class="nav navbar-nav menubarul">
                        <li id="m2">
						
                            <a href="systemadmin.php">
                                <i class='glyphicon glyphicon-home'></i> Home
                            </a>

                        </li>
<li class="dropdown" id="m1">
                                <a href="Registration/SemesterRegistration"
                                   class="dropdown-toggle" data-toggle="dropdown">
                                    <i class='glyphicon glyphicon-folder-open'></i>  Create Account<b class="caret"></b>
                                </a>
                                    <ul class="dropdown-menu">
<li class="">
                                                    <a href="createaccount.php">
                                                        <i class='glyphicon glyphicon-folder-open'></i> Create User
                                                    </a>
                                            </li>
																								</li>

                                    </ul>
<li class="dropdown" id="m1">
                                <a href=""
                                   class="dropdown-toggle" data-toggle="dropdown">
                                    <i class='glyphicon glyphicon-briefcase'></i> Manage<b class="caret"></b>
                                </a>
                                    <ul class="dropdown-menu">
                                            
<li class="">
                                                    <a href="manageuser.php">
                                                        <i class='glyphicon glyphicon-edit'></i> Manage User 
                                                    </a>
                                            </li>
                                    </ul>

                        </li>
<li class="dropdown" id="m4">
                                <a href=""
                                   class="dropdown-toggle" data-toggle="dropdown">
                                    <i class='glyphicon  glyphicon-th-list'></i> View Report<b class="caret"></b>
                                </a>
                                    <ul class="dropdown-menu">
<li class="">
                                                    <a href="viewuser.php">
                                                        <i class='glyphicon glyphicon-list-alt'></i> User Report
                                                    </a>
                                            </li>
<li class="">
                                                    <a href="viewhistory.php">
                                                        <i class='glyphicon glyphicon-list-alt'></i> View History
                                                    </a>
                                            </li>
                                    </ul>

                        </li>
		<?php
                                        	$sql="SELECT* FROM passwordresethistory where Status=0";
											     $query = mysqli_query($con, $sql);
	
	//to count number of rows
	$number=mysqli_num_rows($query);
                                           ?>
		<li class="" id="m97">
                                <a href="inboxreset.php">
                                   
                                    <i class='glyphicon glyphicon-envelope'></i> Inbox Password Reset <font color="red"><sup><?php echo $number; ?></sup></font></a>
                                </a>
                               

                        </li>

						

<li class="" id="m97">
                                <a href="help.php">
                                    <i class='glyphicon glyphicon-question-sign'></i> User Guide
                                </a>

                        </li>
						
						   <?php
											
											$sql="SELECT * FROM Account WHERE Username='$_SESSION[SESS_FIRST_NAME]'";
                                        	$nomessages=mysqli_query($con,$sql);
                                            if(mysqli_num_rows($nomessages)){
											while($row=mysqli_fetch_array($nomessages))
											{
											$fn=$row['Fname'];
											$mn=$row['Mname'];
											$ln=$row['Lname'];
											$em=$row['Email'];
											$image2="<img src='../registrar/uploads/registrarphoto/$row[Photo]' width=35 height=38 class='img-circle'";
											}
											}
											else
											{
											$image2="<img src='images/profilepic.jpg' width=35 height=38 ";																						}
											?>
											

<li class="" id="m97">
                                <a href="profile.php">
                                   
                                    <i class='glyphicon glyphicon-user'></i> Profile </a>
                                </a>
                               

                        </li>
						
						
					
					
						<li class="" id="m99">
                               
                                   
                                    <?php echo $image2; ?>
                               
                               

                        </li>	
					
		<li class="" id="m99">
                                <a href="logout.php">
                                   
                                    <i class='glyphicon glyphicon-log-out'></i> Log out ( <?php echo $fn.'&nbsp;'.$mn.'&nbsp;'.$ln.')';?> </a>
                                </a>
                               

                        </li>

        </ul>
					          
    </div><!-- /.navbar-collapse -->
</nav>
<script type="text/javascript">

    $(document).ready(function () {
        $('.navbar .dropdown').hover(function () {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
            $(this).find('.dropdown-submenu').first().stop(true, true).delay(250).slideDown();
        }, function () {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
            $(this).find('.dropdown-submenu').first().stop(true, true).delay(100).slideUp();


        });
        //hover out
        // For the Second level Dropdown menu, highlight the parent
        $(".dropdown-menu")
        .mouseenter(function () {
            $(this).parent('li').addClass('active');
        })
        .mouseleave(function () {
            $(this).parent('li').removeClass('active');
        });
        //
        // handle navbar toggle menus
        //
        $(".navbar-toggle").click(function (e) {
            //e.preventDefault();
            //var attrValue = $(".navbar-collapse").attr('data-toggle');
            //if (attrValue == 'undefined' || attrValue == 'collapse') {
            //    $(".navbar-collapse").collapse('hide');
            //    $(".navbar-collapse").attr('data-toggle','collapse in');
            //} else {
            //    $(".navbar-collapse").collapse('show');
            //    $(".navbar-collapse").attr('data-toggle', 'collapse');
            //}

            //var toggle = $(".navbar-toggle").is(":visible");
            var toggle = $(".navbar-collapse").css("display");
            if (toggle != 'none') {
                //$(".navbar-collapse").collapse('hide');
                $(".navbar-collapse").css('display', 'none');
                $("#navBarCol").css('min-height', '0px');
                //alert("hide");
            } else {
               // alert("show");
                //$(".navbar-collapse").collapse('show');
                $(".navbar-collapse").css('display', 'block');
                $("#navBarCol").css('min-height', '420px');
                //$(".navbar-collapse").attr('data-toggle', 'toggle');
            }
            e.preventDefault();
        });
        //$(".navbar-collapse").find("a:not(.dropdown-toggle)").off("click").off("mousedown");
    });

</script>


     <div class="container-fluid col-md-12">

        <div class="row" style="min-height: 80vh!important">
            <!-- BEGIN LEFTBAR SECTION -->
            <div class="col-md-2 column-divider col-sm-2">
                
   	




	
<div class="list-group hidden-xs.hidden-lg">
    <span class="list-group-item active">
        Create Account
    </span>
    <a href="createaccount.php" class="list-group-item">
        <i class='glyphicon glyphicon-folder-open'></i>  Create User
    </a>
</div>
<div class="list-group hidden-xs.hidden-lg">
    <span class="list-group-item active">
        Manage
    </span>
    <a href="manageuser.php" class="list-group-item">
        <i class='glyphicon glyphicon-edit'></i> Manage User
    </a>
   
</div>

<div class="list-group hidden-xs hidden-sm">
    <span class="list-group-item active">
        &nbsp;
    </span>



</div>
<style type="text/css">


</style>

            </div>


            <!--/span-->
            <div class="col-md-10">

                



<style>
    tr#footerRowtbl:hover {
        background-color: #E4EEF6 !important;
    }
</style>