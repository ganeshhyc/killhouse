
<?php
include_once("config.php");
session_start();
ob_start();
if((isset($_SESSION['stduid2']))&&(isset($_SESSION['stdpwd2'])))
{
header('Location: index.php') ;
}
?>

<html xmlns="http://www.w3.org/1999/xhtml"><head> <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico'/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" /><title>KILLHOUSE</title>

<!-- Image Preloader -->
<script type="text/javascript" src="http://ajax.googlesapi.com/ajax/libs/jquery/jquery.min.js"></script>

</head>

<body>
<div id="container">
<div id="header">
<ul> 
<li><a href="default.php">Home</a></li>
<li><a href="">About Killhouse</a></li>

<li><a href="">Dates</a></li>
<li class="last"><a href="">Contact</a></li>
</ul>
</div>
<div id="content">
<div id="left">
<div class="menu">
<div class="menuheader">
<h3>Menu</h3>
</div>
<div class="menucontent">
<ul>
<li><a href="">Home</a></li>
<li><a href="">Online Hosts</a></li>
<li><a href="">Help</a></li>
</ul>
</div>
<div class="menufooter"></div>
</div>

</div>
<div id="right">
<div class="menu">
<div class="menuheader">
</div>
<div class="menucontent">
<div class="member"> 

</span>

</div>
<div class="clear"></div>
</div>
<div class="menufooter"></div>
</div>
</div>
<div id="middle">
<div class="post">
<div class="postheader">
<h1><center>Welcome to KILLHOUSE</center></h1>
</div>
<div class="postcontent"><center>
<p>Killhouse is the ultimate destination for first person shooting games,
free download the game patches, and more!</p>
<p>This is your chance to play games every month end,
with a great categories to choose from - Action Games, Adventure Games, Racing Games and Shooter Games.</p>
<p>Best of all, Killhouse is updated every month, making your multiplayer host server so that you can compete your friends. </p>
<p>Every month end Killhouse organises a competition where two diffrent group i.e., GREEN MARSHALS and RED BRIGADIERS compete against each other to prove themselve</p>
<p>The best one is been awarded with a cash money of Rs. 10000</p>
<p>For each competition players should pay an entrance charge of Rs. 300/- </p>
<p><font color="blue"><h4>SO WHAT ARE YOU WAITING FOR REGISTER NOW!</h4></p>
</center>
</div>
<div class="postfooter"></div>
</div>
<div class="post">

</div>
</div>
<div id="footer">

<span>

<div align="center">

</div>

Copyright © 2017</span> </div>
</div>
</body></html>