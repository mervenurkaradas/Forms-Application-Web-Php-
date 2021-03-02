<?php
function kontrol($input)
{
	
if (preg_match("#select|update|delete|concat|create|table|union|length|show_table|mysql_list_tables|mysql_list_fields|mysql_list_dbs#i", $input))
header("location:vt_hata.php");//hata sayfasına yönlendir

else

 echo "";

	
} 

?>