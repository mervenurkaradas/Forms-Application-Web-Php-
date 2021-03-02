<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LİSTE</title>
</head>

<body>
<table border="1" align="center">
<tr><td>id</td><td>AD SOYAD</td><td>EPOSTA</td><td>ŞEHİR</td><td>ZİYARETÇİ PROFİL</td><td>KONU BAŞLIK</td><td>KONU İÇERİK</td><td>SİL</td><td>OKUNDU</td><td>YANITLA</td></tr>
<?PHP
include("oturum.php");//oturum kontrolü için
include("vt_ayar.php");//vt_ayar sayfasının çağrılması
if(isset($_GET["silkod"]))//Silme linkine tıklanmışsa
{
	$silsorgu="DELETE FROM iletisim WHERE ID=".$_GET["silkod"];
	if(mysql_query($silsorgu))
	{
		echo "KAYIT SİLİNDİ";
	}
	else
	{
		echo "KAYIT SİLME HATASI";
	}
}
$sorgu = "SELECT * FROM iletisim";
$tablo=mysql_query($sorgu);
while($kayit=mysql_fetch_object($tablo)):
$pid=$kayit->ID;
$padsoyad=$kayit->ADSOYAD;
$peposta=$kayit->EPOSTA;
$psehir=$kayit->SEHIR;
$pzprofil=$kayit->ZPROFIL;
$pkbaslik=$kayit->KBASLIK;
$pkicerik=$kayit->KICERIK;
if(isset($_GET["okod"]) && $pid==$_GET["okod"])
{
echo "<tr style='color:red'><td>$pid</td><td>$padsoyad</td><td>$peposta</td><td>$psehir</td><td>$pzprofil</td><td>$pkbaslik</td><td>$pkicerik</td><td><a href='liste.php?silkod=$pid' onclick=\"return confirm('Silmek İstediğinizden Emin misiniz?') \"> <img width='18' height='18' src='sil.png'></a></td><td><a href='liste.php?okod=$pid'>Okundu</a></td><td><a href='mailGonder.php?mail=$peposta'>Yanıtla</a></td></tr>";
}
else
{
echo "<tr><td>$pid</td><td>$padsoyad</td><td>$peposta</td><td>$psehir</td><td>$pzprofil</td><td>$pkbaslik</td><td>$pkicerik</td><td><a href='liste.php?silkod=$pid' onclick=\"return confirm('Silmek İstediğinizden Emin misiniz?') \"> <img width='18' height='18' src='sil.png'></a></td><td><a href='liste.php?okod=$pid'>Okundu</a></td><td><a href='mailGonder.php?mail=$peposta'>Yanıtla</a></td></tr>";
}
endwhile;
?>
</table>
<?php
echo "KAYIT SAYISI:".mysql_num_rows($tablo);
echo "<br> <a href='ILETISIMFORMU.php'>KAYIT EKLE</a>";
echo "<br> <a href='cikis.php'>ÇIKIŞ YAP</a>";
?>
</body>
</html>