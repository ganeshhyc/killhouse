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
<h1><center>Welcome to Read-box &nbsp <a href="logout.php">Logout</a> &nbsp <a href="readbox.php">readbox</a></center></h1>

<center>
<p><font color="blue"><h3>Update Score</h3></p>

<form method="post" action=""></p></p>
<input type="text" placeholder="Username" name="usn" required="true"/></p>
<select name="game" >
<option></option>
<option>cod4mw</option>
<option>blur</option>
<option>codwaw</option>
<option>tf2</option>
</select>

<input type="number" placeholder="add score" name="score" required="true"/></p>
<input type="submit" value="update" name="sub" style="height:25px;width:75px;" />
</form>

<?php 

if(isset($_POST['sub'])&&(!empty($_POST['usn'])))
{
	$un=mysql_real_escape_string($_POST['usn']);
	$game=mysql_real_escape_string($_POST['game']);
	$score=mysql_real_escape_string($_POST['score']);
	if(empty($_POST['game'])&&empty($_POST['score']))
	{
	echo'<script type="text/javascript">alert("please enter!");</script>';
}
	else{ 
		
	$sql=mysql_query("SELECT * FROM log WHERE user='$un'");
	if($result=mysql_fetch_array($sql))
	{$score=$score+$result['cod4'];
		if(strcmp($game,"cod4mw")==0){
			mysql_query("update log set cod4='$score' where user='$un'");
			
	echo'<script type="text/javascript">alert("done");</script>';
			}
		else if(strcmp($game,"codwaw")==0){
			$score=$score+$result['codwaw'];
			mysql_query("update log set codwaw='$score' where user='$un'");
			
	echo'<script type="text/javascript">alert("done");</script>';}
		else if(strcmp($game,"tf2")==0){
			$score=$score+$result['tf2'];
			mysql_query("update log set tf2='$score' where user='$un'");
	echo'<script type="text/javascript">alert("done");</script>';}
		else if(strcmp($game,"blur")==0){
			$score=$score+$result['blur'];
			mysql_query("update log set blur='$score' where user='$un'");
	echo'<script type="text/javascript">alert("done");</script>';}
		else{
			
	echo'<script type="text/javascript">alert("not done");</script>';
		}
	}else
		echo'<script type="text/javascript">alert("error please try again!");</script>';
}}

?></br></br></br>

<form method="POST" action="">
<input type="text" name="ip" placeholder="ip_address"/>
<input type="submit" value="IP_SUBMIT"name="ip_sub"style="height:25px;width:75px;"/>
</form>
</center>
<?php
if(isset($_POST['ip_sub'])&&(!empty($_POST['ip'])))
{
	$ip=mysql_real_escape_string($_POST['ip']);
	mysql_query("UPDATE ip set ip='$ip' WHERE id=1");
	
}
?>
<span>

<div align="center">

</div>
<center>
Copyright © 2016</span> </div>
</div></center>
</body></html>