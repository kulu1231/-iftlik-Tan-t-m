﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<?php
include("../baglanti.php");
$id = $_GET["id"];
echo $id;
$sil = "delete from urunler where urun_id='$id'";
$stat = $baglan->prepare($sil);
$stat->execute();
header("Location:urunsil.php");



?>
</body>
</html>