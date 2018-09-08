<?php

session_start();
include_once("config.php");
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default.php') ;
}
ob_start();
if(isset($_POST['sub']))
{
$uid = mysql_real_escape_string($_POST['un']);
$pwd = mysql_real_escape_string($_POST['pa']);
$result = mysql_query("SELECT * FROM log WHERE user='$uid' AND pass='$pwd'");

if($row = mysql_fetch_array($result))
{
$_SESSION['stduid2']=$row['user'];//stores userid session
$_SESSION['stdpwd2']=$row['pass'];//stores password session
header('location:index.php');
}
else
{
echo '<script type="text/javascript">alert("Invalid Username or Password!");self.location.href="default.php"</script>';

}
}
?>