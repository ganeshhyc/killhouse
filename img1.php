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
$em=$row['name'];
$id=$row['id'];
$img=$row['image'];
ob_start();
?>
<html lang='en'>
<head>
<title></title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

</head>
<body>
<div class='container'>

<canvas id='new' width='320' height='240' style='border:1px solid #000;'>
</canvas>


    <button id='sav' type="button" class="btn btn-default btn-sm" onClick=save(); disabled>
    <span class="glyphicon glyphicon-floppy-disk"></span> Save my ID
    </button><a href="" id="download" download="my_id.jpeg"></a></button>
</p> 
<input type='text' id='srava' value="<?php echo $uid; ?>" hidden><p/>
<input type='text' id='desig' value="<?php echo $em; ?>" hidden >
<input type='text' id='gan'  value="<?php echo $id; ?>" hidden >
<p>

	
	<img id="uploadPreview" src="<?php echo "images/".$img; ?>" style="width: 50px; height: 50px;" /></p>
	
<p/>
<input type='button' id='upd' value='Generate!' onClick=gene();> </button><a href="default.php">HOME</a>

</div>
</body>


<script>

var c=document.getElementById('new')
var co=c.getContext('2d')

function save(){
datau=c.toDataURL('image/jpeg;base64;')//.replace("image/png", "image/octet-stream");
//window.location.href=datau
anchor=document.getElementById('download')
anchor.href=datau
anchor.innerHTML='Download'
}
sra=document.getElementById('srava').value
des=document.getElementById('desig').value
gan=document.getElementById('gan').value
function gene(){

if (sra.length||des.length>0) 
{
r=1
if(r==true){
c=document.getElementById('new')
co=c.getContext('2d')
co.clearRect(0,0,320,240)
init()
co.font='25px Arial'
co.strokeText(sra,20,140)

idnu=Math.random()*10000
co.font='15px Arial'
co.fillStyle='#000000'
co.strokeText('ID:'+gan,200,100)

co.font='16px Arial'
co.fillStyle='#000000'
co.fillText(des,20,170)

youphot=document.getElementById('uploadPreview')
co.drawImage(youphot,180,110,100,100)
document.getElementById('sav').disabled=false

}else {
document.write('You have cancelled the update!')
}
}else{alert('Please Enter your Details') }
}

function init(){

grs=co.createLinearGradient(150,243,170,75)
grs.addColorStop(1,'#c5e5d4')
grs.addColorStop(0,'white')
co.fillStyle=grs
co.fillRect(0.5,75.5,319,164.5)

gr=co.createLinearGradient(150,243,170,75)
gr.addColorStop(1,'#292626')
gr.addColorStop(0,'white')
co.fillStyle=gr
co.fillRect(0,0,150,73.5)

grd=co.createLinearGradient(150,143,170,75)
grd.addColorStop(1,'#292626')
grd.addColorStop(0,'white')
co.fillStyle=grd
co.fillRect(150,0,169.5,73.5)

co.fillStyle='white'
co.fill()

co.moveTo(0,75)
co.lineTo(320,75)
co.stroke()

co.font='25px Arial'
co.fillText('KILLHOUSE',10,40)

co.font='11px Arial'
co.fillText('Team Killhouse',200,40)

co.fillStyle="#FFFF00"
co.strokeRect(180,110,100,100)

}


init()

function first(){
co.font='25px Arial'
co.strokeText(sra,20,140)


co.font='16px Arial'
co.fillStyle='#000000'
co.fillText(des, 10,170)

co.font='15px Arial'
co.fillStyle='#000000'
co.fillText('ID:'+gan,200,100)
}
first()
function PreviewImage() {
        var prr = new FileReader();
        prr.readAsDataURL(document.getElementById("imagefile").files[0]);

        prr.onload = function (ev) {
            document.getElementById("uploadPreview").src = ev.target.result;
        };
    };


</script>
</html>