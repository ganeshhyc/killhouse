<?php
session_start();
include_once("config.php");
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default.php') ;
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
<div id="container">
<div id="header">
<ul>
<li><a href="Killboard.php">My Killboard</a></li>
<li><a href="img.php">Generate killCard</a></li>
<li><a href="">Download</a></li>
<li class="last"><a href="logout.php">Logout</a></li>
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
<li><a href="index.php">Home</a></li>
<li><a href="team.php">My Team</a></li>
<li><a href="host.php">Online Hosts</a></li>
<li><a href="">Help</a></li>
<li><a href="">Shout_Box</a></li>
<li><a href="profile.php">Your Account</a></li>
</ul>
</div>
<div class="menufooter"></div>
</div>
</div>
<div id="right">
<div class="menu">
<div class="menuheader"><?php 
$admno=mysql_real_escape_string($_SESSION['stduid2']);
$res = mysql_query("SELECT * FROM log WHERE user='$admno'");
while($row = mysql_fetch_assoc($res)){
	$em=$row['email'];
echo"<h3>".$row['name']."</h3>";}?>
</div>
<div class="menucontent">
<div class="member"> <?php 
$admno=mysql_real_escape_string($_SESSION['stduid2']);
$res = mysql_query("SELECT * FROM log WHERE user='$admno'");
while($row = mysql_fetch_assoc($res)){
echo "<a href='images/img/".$row['image']."' target='_blank'><img style='border:2px solid grey'  height='200' src=images/img/".$row['image'].">";}?></a> <span><form action="upload.php" method="POST" enctype="multipart/form-data">
 <label for="files" class="btn"><font color="blue">Select Image</label>
  <input id="files" name="image" style="visibility:hidden;" type="file">

<input type="text" name="adm_no" value="<?php
echo $row['user'];?>" hidden>
<input type="submit" value="Update" name="phupd" style="height:30px;width:100px" >
</form></span>

</div>
<div class="clear"></div>
</div>
<div class="menufooter"></div>
</div>
</div>
<div id="middle">
<div class="post">
<div class="postheader">
<h1><center>Welcome to Shout-box</center></h1>
</div>
<div class="postcontent"><center>
<p><font color="blue"><h3>PLEASE GIVE YOUR FEEDBACK</h3></p>
<body>
<form method="post" action="">
<textarea rows ="5" cols="40" name="msg"></textarea></p> <br />
<input type="submit" name="sub" value="Kill it!" style="height:30px;width:100px">
</form>

<?php 
date_default_timezone_set('Asia/Calcutta'); 
$date = date('d-m-Y : h-i-s');
if(isset($_POST['sub'])&&(!empty($_POST['msg']))){
$input ="( ".$date." ) ".$_SESSION['stduid2']."(".$em.") : ".$_POST['msg'].PHP_EOL; 
$fp = fopen("test.txt", "a"); 
fwrite($fp, $input).'&nbsp;'; 
fclose($fp); 
$xe=1;

if($xe==1)
	echo "Thanks for your feedback";
}
 

?>
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

Copyright © 2016</span> </div>
</div>
</body></html>