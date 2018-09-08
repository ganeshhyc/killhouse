<?php

session_start();
include_once("config.php");
if((!isset($_SESSION['stduid']))&&(!isset($_SESSION['stdpwd'])))
{
header('Location: admin.php') ;
}
if(!empty($_GET['qr'])){
	$id=$_GET['qr'];
	$x="";
	$sql=mysql_query("SELECT * FROM log WHERE id='$id'");
	while($result=mysql_fetch_assoc($sql))
	{
		$x=$result['id'];
		echo "<h1>"."<font color='blue'>VALID"."</h1>"."</p>";
		echo "<h2>"."name: ".$result['name']."</p>";
		echo "user name: ".$result['user']."</p>";
		echo "email: ".$result['email']."</p>"."</h2>";
		echo '<img src="images/img/'.$result['image'].'" height="80" width="80">';
		if($id%2==0)
			echo "<font color='green'>GREEN MARSHALS"."</h1>";
		else
			echo "<h1>"."<font color='red'>RED BRIGADIERS"."</h1>";
	}
	if($x!=$id)
	echo "<h1>"."<font color='red'>NOT VALID"."</h1>";
}
else
	echo "<h1>"."<font color='red'>NOT VALID"."</h1>";
?>