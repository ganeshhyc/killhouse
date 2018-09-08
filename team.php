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
<link href="style.css" rel="stylesheet" type="text/css" /><title>TEAM</title>

<!-- Image Preloader -->
<script type="text/javascript" src="http://ajax.googlesapi.com/ajax/libs/jquery/jquery.min.js"></script>

</head>

<body>
<div id="container">
<div id="header">
<ul>
<li><a href="killboard.php">My Killboard</a></li>
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
<li><a href="">Online Hosts</a></li>
<li><a href="">Help</a></li>
<li><a href="shoutbox.php">Shout_Box</a></li>
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
<h1><center>You are <?php 

				$la=mysql_query("SELECT * FROM log WHERE user='$admno'");
				if($st=mysql_fetch_array($la))
				{$count=$st['id']%2;
				if($count==0)
					$str="<font color='#97d784'>"."GREEN MARSHALS";
				else
					$str="<font color='#d78984'>"."RED BRIGADIERS";
				}
				echo $str;
			?></center></h1>
</div>
<div class="postcontent"><center>
<form method="GET" action="team.php">
<input type="text" name="search" placeholder="Enter Username"> &nbsp &nbsp
<input type="submit" name="sub" value="SEARCH" style="width:80px; height:20px;"></p>
</form>
<table border="2" cellpadding="3" cellspacing="1">
<tr><th><font color='#97d784'>GREEN MARSHALS</th><th><font color='#d78984'>RED BRIGADIERS</th></tr>
<tr><td><table border="0" cellpadding="2" cellspacing="1">
<?php
if(isset($_GET['sub']))
	$s=mysql_real_escape_string($_GET['search']);
else
	$s="";
$res = mysql_query("SELECT * FROM log WHERE user LIKE '%$s%'");
while($row = mysql_fetch_assoc($res)){
	if($row['id']%2==0){
		
	echo"<tr>"."<td>"."<img src='images/img/".$row['image']."' height='80' width='80'>"."</td>"."<td>"."<font color='#97d784'>".$row['user']."</td>"."</tr>";}}?>





</table></td><!-- green ke liye -->



<td><table border="0" cellpadding="2" cellspacing="1"><?php
$res = mysql_query("SELECT * FROM log WHERE user LIKE '%$s%'");
while($row = mysql_fetch_assoc($res)){
	if($row['id']%2!=0)
		echo"<tr>"."<td>"."<img src='images/img/".$row['image']."' height='80' width='80'>"."</td>"."<td>"."<font color='#d78984'>".$row['user']."</td>"."</tr>";}?>
               </table></td></tr><!-- red ke liye -->
</table>
</center></div>
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