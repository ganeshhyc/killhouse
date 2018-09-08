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
<li><a href="">My Killboard</a></li>
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
<h1><center>Your Killboard</center></h1>
</div>
<div class="postcontent"><center>
<table border="2" cellpadding="3" cellspacing="1">
<tr><th><font color='#f31919'>COD4</th><th><font color='#e619f3'>Blur</th><th><font color='#2319f3'>CODWAW</th><th><font color='#19e6f3'>TF2</th></tr>
<tr><?php
$sql=mysql_query("SELECT * FROM log WHERE user='$admno'");
while($game=mysql_fetch_assoc($sql)){
echo"<td><font color='#ffffff'>".$game['cod4']."</td>";
echo"<td><font color='#ffffff'>".$game['blur']."</td>";
echo"<td><font color='#ffffff'>".$game['codwaw']."</td>";
echo"<td><font color='#ffffff'>".$game['tf2']."</td>";
}

?></tr>
</table></p></p><font color="white"><h2>TOP KILLERS</h2></p><table border="2" cellpadding="3" cellspacing="1"><tr>
<?php $result = mysql_query("SELECT * FROM log ORDER BY cod4 DESC LIMIT 0 ,3") or die(mysql_error());
if(mysql_num_rows($result) > 0): ?>
<td><table>
    <tr>
        <th style="text-align:left;"><font color='#2ff647'>ID</th>
        <th style="text-align:left;"><font color='#2ff647'>COD4</th>
    </tr><?php $i=1?>
    <?php while($row = mysql_fetch_assoc($result)): ?>
    <tr>
        <td><?php if($i==1){
		echo '<img src="images/gold.png" height="20"width="17">';$i++;}
			else if($i==2){
		echo '<img src="images/silver.png" height="20"width="17">';$i++;}
		else if($i==3){
		echo '<img src="images/bronze.png" height="20"width="17">';$i=1;}
		echo "<font color='#ffffff'>".$row['user']; ?></td>
        <td style="font-weight: bold; color: #008AFF;"><?php echo $row['cod4']; ?></td>
    </tr>
    <?php endwhile; ?>
</table></td><td>
<?php endif; ?>
<?php $result = mysql_query("SELECT * FROM log ORDER BY blur DESC LIMIT 0 ,3") or die(mysql_error());
if(mysql_num_rows($result) > 0): ?>
<table>
    <tr>
        <th style="text-align:left;"><font color='#2ff647'>ID</th>
        <th style="text-align:left;"><font color='#2ff647'>BLUR</th>
    </tr>
    <?php while($row = mysql_fetch_assoc($result)): ?>
    <tr>
        <td><?php if($i==1){
		echo '<img src="images/gold.png" height="20"width="17">';$i++;}
			else if($i==2){
		echo '<img src="images/silver.png" height="20"width="17">';$i++;}
		else if($i==3){
		echo '<img src="images/bronze.png" height="20"width="17">';$i=1;}
		echo "<font color='#ffffff'>".$row['user']; ?></td>
        <td style="font-weight: bold; color: #008AFF;"><?php echo $row['blur']; ?></td>
    </tr>
    <?php endwhile; ?>
</table></td></tr><tr>
<?php endif; ?>
<?php $result = mysql_query("SELECT * FROM log ORDER BY codwaw DESC LIMIT 0 ,3") or die(mysql_error());
if(mysql_num_rows($result) > 0): ?>
<td><table>
    <tr>
        <th style="text-align:left;"><font color='#2ff647'>ID</th>
        <th style="text-align:left;"><font color='#2ff647'>CODWAW</th>
    </tr>
    <?php while($row = mysql_fetch_assoc($result)): ?>
    <tr>
        <td><?php if($i==1){
		echo '<img src="images/gold.png" height="20"width="17">';$i++;}
			else if($i==2){
		echo '<img src="images/silver.png" height="20"width="17">';$i++;}
		else if($i==3){
		echo '<img src="images/bronze.png" height="20"width="17">';$i=1;}
		echo "<font color='#ffffff'>".$row['user']; ?></td>
        <td style="font-weight: bold; color: #008AFF;"><?php echo $row['codwaw']; ?></td>
    </tr>
    <?php endwhile; ?>
</table></td><td>
<?php endif; ?>
<?php $result = mysql_query("SELECT * FROM log ORDER BY tf2 DESC LIMIT 0 ,3") or die(mysql_error());
if(mysql_num_rows($result) > 0): ?>
<table>
    <tr>
        <th style="text-align:left;"><font color='#2ff647'>ID</th>
        <th style="text-align:left;"><font color='#2ff647'>TF2</th>
    </tr>
    <?php while($row = mysql_fetch_assoc($result)): ?>
    <tr>
        <td><?php if($i==1){
		echo '<img src="images/gold.png" height="20"width="17">';$i++;}
			else if($i==2){
		echo '<img src="images/silver.png" height="20"width="17">';$i++;}
		else if($i==3){
		echo '<img src="images/bronze.png" height="20"width="17">';$i=1;}
		echo "<font color='#ffffff'>".$row['user']; ?></td>
        <td style="font-weight: bold; color: #008AFF;"><?php echo $row['tf2']; ?></td>
    </tr>
    <?php endwhile; ?>
</table></td>
<?php endif; ?></tr></table>
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