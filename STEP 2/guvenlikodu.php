<?php 
session_start();
$resim =imagecreatetruecolor(200,20);
$krem=imagecolorallocate($resim,255,228,225);

$krem=imagecolorallocate($resim,255,228,225);

$koyuGri=imagecolorallocate($resim,47,79,79);
$mavi=imagecolorallocate($resim,65,105,225);

imagefill($resim,0,0,$krem);


$dizi=array("a","b","c","d","1","2","3","4");
$kod="";
for($i=0;$i<=3;$i++){
	$kod.=$dizi[rand(0,count($dizi)-1)];
}
$_SESSION["kod"]=$kod;
imagestring($resim,5,100,2,$kod,$mavi);
header("context-type: image/png");
imagepng($resim);
imagedestroy($resim);

?>
