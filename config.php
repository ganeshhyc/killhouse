<?php
$conn=mysql_connect("localhost","root","")or die("Connection to Server failed");
$db=mysql_select_db("killhouse",$conn)or die("Connection to Database failed");
?>