<!DOCTYPE html>
<html>
<head><!--header files are added here-->
<title>View:: Seating Arragement</title>
<meta charset="uft=8"/>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Champion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--/header files are added here-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="main1.css" rel="stylesheet" type="text/css" media="all" />
<style>
	table{
		width: 80%;
	}
</style>
</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" href="index.html">Seating Arrangement <span>Department of Computer Science HUKPOLY Katsina</span></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav">
					 <li class="hvr-sweep-to-bottom active"><a href="index.html" class="scroll">About Project</a></li>

						<li class="hvr-sweep-to-bottom active"><a href="login.html">Admin Login</a></li>
						<li class="hvr-sweep-to-bottom"><a href="faculty.php" class="scroll">Invigilator</a></li>
						<li class="hvr-sweep-to-bottom"><a href="sview.html" class="scroll">Student</a></li>
						
						
						<li class="hvr-sweep-to-bottom"><a href="register.html" class="scroll">Sign Up</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- welcome 
	<div class="welcome">
		<div class="container">
			<h3>Welcome !</h3>
			<p class="ever">To take a trivial example, which of us ever undertakes laborious 
				physical exercise.</p>
			<div class="welcome-grids">
				<div class="col-md-3 welcome-grid">
					<div class="welcome-grd">
						<div class="icons">
							<span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>
						</div>
						<h4>autem vel eum</h4>
						<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam.</p>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
welcome -->

<div class="con">
<!--Forms-->
	
   <div class="loginscene"><div class="page-header">
        <h1>Student</h1>
	
      </div>
  <div class="bs-example" data-example-id="simple-horizontal-form">
    <!--<form class="form-horizontal" action="" method="POST">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Enter your name:</label>
        <div class="col-sm-10">
           <input type="text" class="form-control" name="invg" >
        </div>
      </div>
      
	  
	  
      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default btn-info">Submit</button>
        </div>
   
    </form>-->
  </div>
 
	<!--//forms-->
	</div>


<?php
require "connect.inc.php";
// require "./admin/connection.php";
include "stylee.css";
$r=$_POST['rollno'];

$n=1;       $rm=1;  $i=1;
$q="SELECT * FROM arrange WHERE matric_no='$r'";
$res = mysqli_query($conn, $q);

$row = mysqli_fetch_assoc($res);

if(count($row)>0)
{
echo "<table>
<tr>
	<td>".$row['name']." YOUR VENUE IS ".$row['venue']." AND YOUR SEAT NUMBER IS ".$row['seat_no']."</td>
</tr>";
}else{
	echo "No Record Found";
}





?>










	</div>
</div>
<!--short codes end here--></div></div>

</body>
</html>