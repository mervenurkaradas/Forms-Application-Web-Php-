<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php

if(empty($_GET["mail"]))
{

}
else
{
	echo "Mail gönderilecek kişi: ".$_GET["mail"];
	
}
if(isset($_POST["btngonder"]))
{
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
$mail->SMTPSecure = 'tls'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
$mail->Host = "smtp.gmail.com"; // Mail sunucusunun adresi (IP de olabilir)
$mail->Port =587; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "158486165@gmail.com"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
$mail->Password = "15564684"; // Mail adresimizin sifresi

$mail->SetFrom("mnkaradas80@gmail.com", "Merve Nur Karadas"); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
$alici=$_GET["dkod"];
echo $alici;
$mail->AddAddress($alici, 'MERVE KARADAS');
 // Mailin gönderileceği alıcı adres
$mail->Subject = "LUTFEN MESAJINIZI DUZELTIN"; // Email konu başlığı
$metin = $_POST["txtmesaj"];
$mail->Body = $metin ; // Mailin içeriği
if($mail->Send()) {
	 header ("location:sonucg.php");
} else {
    echo ' Mail gönderilirken bir hata oluştu: ' . $mail->ErrorInfo;
}

}
if(empty($_GET["mail"]))
{
}
else
{
$pkod=$_GET["mail"];
}
?>

<br />

<form action="mailGonder.php?dkod=<?php echo $pkod ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
<textarea rows="4" cols="50" id="txtmesaj" name="txtmesaj">
</textarea>

<p>
    <input type="submit" name="btngonder" id="btngonder" value="GÖNDER" />
    
  </p> 
  </form>
</body>
</html>