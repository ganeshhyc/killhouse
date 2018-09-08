<body>
<form method="post" action="">
<textarea name="msg" rows ="5" cols="40"></textarea> Enter your message!<br />
<input type="submit" name="submit" value="Save Message">
</form>

<?php 

if(isset($_POST['submit'])){
$input = $_POST['msg']; 
$fp = fopen("test.txt", "a"); 
fwrite($fp, $input).'&nbsp;'; 
fclose($fp); 

}
if($fp = fopen("test.txt", "r")){
	
	$input=fread($fp,1000).'&nbsp'; 
	echo $input;
fclose($fp); 
}
 

?>