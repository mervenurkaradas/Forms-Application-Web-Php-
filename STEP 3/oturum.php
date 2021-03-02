<?php
session_start();
if(empty($_SESSION["site"]))
{
	header("location:giris.php");
}
?>