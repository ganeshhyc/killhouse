<?php
session_start();
include_once("config.php");
if((!isset($_SESSION['stduid']))&&(!isset($_SESSION['stdpwd'])))
{
header('Location: admin.php') ;
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
<h1><center>Welcome to Read-box &nbsp <a href="logout.php">Logout</a> &nbsp <a href="update.php">update</a></center></h1>

<center>
<p><font color="blue"><h3>ENJOY YOUR FEEDS</h3></p>

<?php 

	echo"<textarea rows ='20' cols='100'readonly='true'style='font-size:15pt;background-color:#867979;color:#a6d1f2;border:3px solid #3240f6;'>";
$fp = fopen("test.txt", "r");

while(!feof($fp)){
echo fgets($fp);	

} 
fclose($fp); 
echo"</textarea></p> <br />";

 

?>
</center>

<span>

<div align="center">

</div>
<center>
Copyright © 2016</span> </div>
</div></center>
</body></html>