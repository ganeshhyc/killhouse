<?php

include_once("config.php");
session_start();
ob_start();

if(isset($_POST['subm']))
{
$uid = mysql_real_escape_string($_POST['un']);
$pwd = mysql_real_escape_string($_POST['ps']);
$cwd = mysql_real_escape_string($_POST['cps']);
$fn = mysql_real_escape_string($_POST['fn']);
$em = mysql_real_escape_string($_POST['em']);
if($pwd!=$cwd)
{
	echo '<script type="text/javascript">alert("Password not matched!");self.location.href="default.php"</script>';
}else{
$result = mysql_query("SELECT * FROM log WHERE user='$uid' AND pass='$pwd'");
$res = mysql_query("SELECT * FROM log WHERE email='$em'");

if($row = mysql_fetch_array($result))
{
	echo '<script type="text/javascript">alert("username already exixt");self.location.href="default.php"</script>';
}
else if($row = mysql_fetch_array($res))
{
	echo '<script type="text/javascript">alert("email already exixt");self.location.href="default.php"</script>';
}
else
{
	$la=mysql_query("SELECT * FROM last WHERE id=1");
	if($st=mysql_fetch_array($la))
		$count=$st['last'];
$admno=mysql_real_escape_string($uid);
$id=rand(0000,9999);
$ids=rand(0000,9999);
$new_id=$id.$ids;
if(($count%2)==($new_id%2))
{
	$new_id=$new_id+1;
	mysql_query("UPDATE last SET last=$new_id WHERE id=1");
}
else
	mysql_query("UPDATE last SET last=$new_id WHERE id=1");
$sql="INSERT INTO log(user,name,email,pass,id) VALUES('$uid','$fn','$em','$pwd','$new_id') ";
$ress=mysql_query($sql);
	$result = mysql_query("SELECT * FROM log WHERE user='$uid' AND pass='$pwd'");
$row=mysql_fetch_array($result);
$_SESSION['stduid2']=$row['user'];
$_SESSION['stdpwd2']=$row['pass'];
	

	echo '<script type="text/javascript">self.location.href="index.php"</script>';

}}
}?>