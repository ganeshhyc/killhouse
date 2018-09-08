<?php
session_start();
include_once("config.php");
if((isset($_SESSION['stduid']))&&(isset($_SESSION['stdpwd'])))
{
header('Location: readbox.php') ;
}
ob_start();


?>
<html xmlns="http://www.w3.org/1999/xhtml"><head> <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico'/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" /><title>HOME</title>

<!-- Image Preloader -->
<script type="text/javascript" src="http://ajax.googlesapi.com/ajax/libs/jquery/jquery.min.js"></script>

</head>

<body>
<h1><center>PLEASE LOGIN</center></h1>

<center>
<p><font color="blue"><h3>KILLHOUSE</h3></p>
<body>
<form method="post" action=""></p></p>
<input type="text" placeholder="Username" name="un" ></p>
<input type="password" placeholder="Password" name="pd" ></p>
<input type="submit" value="Admin login" name="sub" style="height:25px;width:75px;" >
</form>
<?php 
if(isset($_POST['sub']))
{
	$un=$_POST['un'];
	$pd=$_POST['pd'];
	$sql=mysql_query("SELECT * FROM admin WHERE user='$un' and pass='$pd'");
	if($row=mysql_fetch_array($sql))
	{
		$_SESSION['stduid']= mysql_real_escape_string($un);
		$_SESSION['stdpwd']= mysql_real_escape_string($pd);
		header('location:readbox.php');
	}
}
?>
</center>

<span>

<div align="center">

</div>
<center>
Copyright © 2017</span> </div>
</div></center>
</body></html>