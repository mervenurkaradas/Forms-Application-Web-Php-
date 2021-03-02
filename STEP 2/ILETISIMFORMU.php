<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>İLETİŞİM</title>

</head>

<body>


<?php

session_start();
$adHata="";
$epostaHata="";
$ilHata="";
$profilHata="";
$kbaslikHata="";
$kicerikHata="";
include("vt_ayar.php");//ayar sayfasının çağrılması
include("kontroll.php");

if(isset($_POST["btnekle"]))//form gönderilmiş ise
{
	$kod=$_POST["kod"];
	
	
	if($kod==$_SESSION["kod"])
	{
	
	 if (empty($_POST["txtad"])) 
	{
    $adHata = "* Zorunlu alan";
  	} 
	
	else 
	{
    $ad =kontrol($_POST["txtad"]);
	$adHata ="";
  	}
	
	if (empty($_POST["txteposta"])) 
	{
    	$epostaHata = "* Zorunlu alan";
  	} 
	else 
	{
    	$eposta=kontrol($_POST["txteposta"]);
		$epostaHata="";
  	}
	

    $iller=$_POST["ddliller"];
	$profil=$_POST["ddlprofil"];

    $konubaslik=$_POST["ddlkonubaslik"];
  	
	
	if ($_POST["txtkonuicerik"] =="") 
	{
    	$kicerikHata = "* Zorunlu alan";
  	} 
	else  
	{
		$kicerikHata ="";
    	$konuicerik=kontrol($_POST["txtkonuicerik"]);
  	}
	

	if($adHata=="" && $epostaHata=="" && $kicerikHata=="")
	{
	$sorgu="INSERT INTO Iletisim(ADSOYAD,EPOSTA,SEHIR,ZPROFİL,KBASLİK,KICERIK) VALUES ('$ad','$eposta','$iller','$profil','$konubaslik','$konuicerik')";
	if(mysql_query($sorgu))//sorgu çalıştıysa
	{
		echo "KAYIT EKLENDİ";
	}
	else
	{
		echo "EKLENİRKEN HATA OLUŞTU!!";
	}
	}
	}
	
	else
	{
		echo "KOD HATALI!";
	}

}

?>
<form id="form1" name="form1" method="post" action="ILETISIMFORMU.php">
  <p>ADINIZ SOYADINIZ
    <input type="text" name="txtad" id="txtad" /><span class="error"><?php echo $adHata;?></span>
  </p>
  <p>EPOSTA
    <input type="text" name="txteposta" id="txteposta" /> <span class="error"><?php echo $epostaHata;?></span>
  </p>
  <p>ŞEHİR
    <select name="ddliller" id="ddliller"><span class="error"><?php echo $ilHata;?></span>
      <option value="0">Lütfen Seçiniz</option>
     
    <option value="İstanbul">İstanbul</option>
<option value="Ankara">Ankara</option>
<option value="İzmir">İzmir</option>
<option value="Adana">Adana</option>
<option value="Adıyaman">Adıyaman</option>
<option value="Afyonkarahisar">Afyonkarahisar</option>
<option value="Ağrı">Ağrı</option>
<option value="Aksaray">Aksaray</option>
<option value="Amasya">Amasya</option>
<option value="Antalya">Antalya</option>
<option value="Ardahan">Ardahan</option>
<option value="Artvin">Artvin</option>
<option value="Aydın">Aydın</option>
<option value="Balıkesir">Balıkesir</option>
<option value="Bartın">Bartın</option>
<option value="Batman">Batman</option>
<option value="Bayburt">Bayburt</option>
<option value="Bilecik">Bilecik</option>
<option value="Bingöl">Bingöl</option>
<option value="Bitlis">Bitlis</option>
<option value="Bolu">Bolu</option>
<option value="Burdur">Burdur</option>
<option value="Bursa">Bursa</option>
<option value="Çanakkale">Çanakkale</option>
<option value="Çankırı">Çankırı</option>
<option value="Çorum">Çorum</option>
<option value="Denizli">Denizli</option>
<option value="Diyarbakır">Diyarbakır</option>
<option value="Düzce">Düzce</option>
<option value="Edirne">Edirne</option>
<option value="Elazığ">Elazığ</option>
<option value="Erzincan">Erzincan</option>
<option value="Erzurum">Erzurum</option>
<option value="Eskişehir">Eskişehir</option>
<option value="Gaziantep">Gaziantep</option>
<option value="Giresun">Giresun</option>
<option value="Gümüşhane">Gümüşhane</option>
<option value="Hakkâri">Hakkâri</option>
<option value="Hatay">Hatay</option>
<option value="Iğdır">Iğdır</option>
<option value="Isparta">Isparta</option>
<option value="Kahramanmaraş">Kahramanmaraş</option>
<option value="Karabük">Karabük</option>
<option value="Karaman">Karaman</option>
<option value="Kars">Kars</option>
<option value="Kastamonu">Kastamonu</option>
<option value="Kayseri">Kayseri</option>
<option value="Kırıkkale">Kırıkkale</option>
<option value="Kırklareli">Kırklareli</option>
<option value="Kırşehir">Kırşehir</option>
<option value="Kilis">Kilis</option>
<option value="Kocaeli">Kocaeli</option>
<option value="Konya">Konya</option>
<option value="Kütahya">Kütahya</option>
<option value="Malatya">Malatya</option>
<option value="Manisa">Manisa</option>
<option value="Mardin">Mardin</option>
<option value="Mersin">Mersin</option>
<option value="Muğla">Muğla</option>
<option value="Muş">Muş</option>
<option value="Nevşehir">Nevşehir</option>
<option value="Niğde">Niğde</option>
<option value="Ordu">Ordu</option>
<option value="Osmaniye">Osmaniye</option>
<option value="Rize">Rize</option>
<option value="Sakarya">Sakarya</option>
<option value="Samsun">Samsun</option>
<option value="Siirt">Siirt</option>
<option value="Sinop">Sinop</option>
<option value="Sivas">Sivas</option>
<option value="Şırnak">Şırnak</option>
<option value="Tekirdağ">Tekirdağ</option>
<option value="Tokat">Tokat</option>
<option value="Trabzon">Trabzon</option>
<option value="Tunceli">Tunceli</option>
<option value="Şanlıurfa">Şanlıurfa</option>
<option value="Uşak">Uşak</option>
<option value="Van">Van</option>
<option value="Yalova">Yalova</option>
<option value="Yozgat">Yozgat</option>
<option value="Zonguldak">Zonguldak</option>
    </select>
  </p>
  <p>Ziyaretçi Profili
    <select name="ddlprofil" id="ddlprofil"><span class="error"><?php echo $profilHata;?></span>
      <option value="0">Lütfen Seçiniz</option>
      <option value="Ogrenci">ÖĞRENCİ</option>
      <option value="Memur">MEMUR</option>
    </select>
  <p>Konu Başlığı
    <select name="ddlkonubaslik" id="ddlkonubaslik"><span class="error"><?php echo $kbaslikHata;?></span>
      <option value="0">Lütfen Seçiniz</option>
      <option value="Dilek">DİLEK</option>
      <option value="Sikayet">ŞİKAYET</option>
	  
    </select>
  <p>
  Konu İçeriği</p>
  <p>
  <textarea name="txtkonuicerik" id="txtkonuicerik" cols="45" rows="5"></textarea><span class="error"><?php echo $kicerikHata;?></span>
  </p>
 
 
  Güvenlik Kodu: <input type="text" name="kod" />
  <img src="guvenlikodu.php" alt="kod"/><br />

  <p>
    <input type="submit" name="btnekle" id="btnekle" value="GÖNDER" />
  </p>  
   
</form>
</body>
</html>
  