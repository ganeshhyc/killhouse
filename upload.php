<?php
include_once("config.php");
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default.php') ;
}
 
$uid = $_SESSION['stduid2'];
$pwd = $_SESSION['stdpwd2'];
$result = mysql_query("SELECT * FROM log WHERE user='$uid' AND pass='$pwd'");
$row=mysql_fetch_array($result);
ob_start();

echo "&nbsp"."&nbsp";
?>


<?php
if(isset($_POST['phupd']))
{if (empty($_FILES['image']['tmp_name'])){}
else{
$admno=mysql_real_escape_string($uid);
$photo = $_FILES['image']['name'];
$random_digit=rand(0000,9999);
$random_digits=rand(0000,9999);
$new_file_name=$random_digit.$random_digits. urlencode($photo);
$target= "images/img/".$new_file_name;
$img=$new_file_name;
$sql="UPDATE log SET image='$img' WHERE user='$admno'";
$result= mysql_query($sql);
$immo=move_uploaded_file($_FILES['image']['tmp_name'],$target);
echo "<br><br><br><br><br><center><h3>Photo Updated Successfully" ;
}}header('Location: index.php') ;
?>
