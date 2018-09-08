
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
<li><a href="">Home</a></li>
<li><a href="about.php">About Killhouse</a></li>

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
<div id="right"><center>
<div class="menu">
<div class="menuheader">
<h3>Login</h3>
</div>
<div class="menucontent">
<div class="member">
<form method="POST" action="login.php">
<input type="text" placeholder="username" name="un"></br></br>
<input type="password" placeholder="password" name="pa"></br></br>
<input type="submit" value="Login" name="sub" style="height:30px;width:90px">
</form>
</span>

</div>
<div class="clear"></div>
</div>
<div class="menufooter"></div>
</div></center>
</div>
<div id="middle">
<div class="post">
<div class="postheader"><center>
<h1>Signup</h1>
</div></center>
<div class="postcontent">
<form method="POST" action="signup.php"><center><table><tr><td>
<font color='#cccccc'>Username</td><td>
<input type="text" name="un" required></td></tr><tr><td>
<font color='#cccccc'>Full Name </td><td>
<input type="text" name="fn" required></td></tr><tr><td>
<font color='#cccccc'>Email</td><td>
<input type="email" name="em" required></td></tr><tr><td>
<font color='#cccccc'>password</td><td>
<input type="password" name="ps" required> </td></tr><tr><td>
<font color='#cccccc'>Confirm pass.</td><td>
<input type="password"  name="cps" required></td></tr><tr><td>
</td><td>
<input type="submit" value="Signup" name="subm" style="height:30px;width:90px"></td></center></tr></table></center>
</form>

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