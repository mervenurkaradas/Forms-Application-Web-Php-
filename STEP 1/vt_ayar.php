<?php
$baglanti=mysql_connect("localhost","root","");//sunucu bağlantisi
if($baglanti)//bağlantı kurulmuş ise
{
	mysql_select_db("iletisim");//veritabanı seçimi
	mysql_query("set names 'utf8'");//karakter kodlaması ayarı
}
else//sunucu bağlantısında sorun varsa
{
	header("location:vt_hata.php");//hata sayfasına yönlendir
}
?>