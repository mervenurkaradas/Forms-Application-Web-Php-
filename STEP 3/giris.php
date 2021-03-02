<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>
<?php
session_start();
$mesaj="";
include("vt_ayar.php");
if(isset($_POST["btngiris"]))
{
$kullaniciadi=$_POST["txtkullaniciadi"];
$sifre=$_POST["txtsifre"];
$sorgu="SELECT * FROM kullanici WHERE k_adi='$kullaniciadi' AND sifre='$sifre'";
$tablo=mysql_query($sorgu);
if(mysql_num_rows($tablo)>0)
{
  $kayit=mysql_fetch_object($tablo);
  $_SESSION["site"]="AS";
  header("location:liste.php");
}
else
{
  $mesaj= "<center><b><font color='#333' size='+2'>* HATALI GİRİŞ</font><b></center>";
}


}
?>

<form action="giris.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  
  <p>KULLANICI ADI
    <input name="txtkullaniciadi" type="text" id="txtkullaniciadi" value="" />
</p>
  <p>ŞİFRE
    <input type="password" name="txtsifre" id="txtsifre" value="" />
  </p>
  
   
   <p>
    <input type="submit" name="btngiris" id="btngiris" value="GİRİŞ YAP" />
  </p>
</form>
<?php 
echo $mesaj;
?>
</body>
</html>