<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://kit.fontawesome.com/98aaa3370a.js" crossorigin="anonymous"></script>
<title>Demirel Çiftlik | Taze Yoğurt , Sebze , Meyve</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
$(window).on('scroll', function () {
var scrolltop = $(this).scrollTop();
if (scrolltop >= 180) {

$('.menu').css("position", "fixed");
$('.menu').css("top", "0");
$('.menu').css("z-index", "1000");



}
else {
    $('.menu').removeAttr('style');
   
   
}
});
    });
        </script>
<style type="text/css">
*
{
	box-sizing:border-box;
	margin:0;
}
body
{
	font-family:Arial, Helvetica, sans-serif;
}
#ust {
	position: relative;
	width: 100%;
	padding:14px 16px;
	z-index: 1;
	background-color:#f3f3f3;
	overflow:hidden;
	
}
#wrap {
	position: relative;
	width: 100%;
	height: auto;
	z-index: 2;
}
#search {
	position: relative;
	float:right;
	width: 300px;
	z-index: 3;
}
input[type=text] {
 
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}
button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  
}
 button:hover {
  background: #ccc;
}
#banner {
	position: relative;
	width: 100%;
	height: 200px;
	background-color:green;
	z-index: 1;
	padding:5px;
}
#banner2 {
	position: relative;
	width: 100%;
	height: 300px;
	margin-top:30px;
	z-index: 0;
	padding:5px;
}
#img {
	position: relative;
	width: 100%;
	height: 120px;
	z-index: 1;
	background:url(images/banner.png) no-repeat center;
	
	
}
.menu {
	position: relative;
	width: 100%;
	height:50px;
	background-color:green;
	z-index: 1000;
	transition:all 0.6 ease;
}
#ust a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.menu ul
{
	margin:0;
	padding:0;
	list-style:none;
	padding-left:100px;
	
}
.menu ul li
{
	float:left;
	padding-left:20px;
}
.menu ul li a
{
	display:block;
	height:40px;
	text-decoration:none;
	font-size:17px;
	color:white;
	transition:all 0.6s ease;
	
	text-align:center;
	
}
.menu ul li a:hover
{
	color:Black;
}

#footer {
	position: relative;
	width: 100%;
	height: 120px;
	padding: 10px;
	margin-top: 30px;
	z-index: 5;
	background-color:#CCC;
	float:right;
	line-height:120px;
	text-align:center;
	color:#FFF;
	
	
	
}
#slider
{
	position:relative;
	width:100%;
	margin-top:30px;
}
#urunler
{
	position:relative;
	width:100%;
	margin-top:30px;
	margin:5px;
}
.icerik
{
	position:relative;
	width:100%;
	height:auto;
	float:left;
	margin:10px;
}
.urunler1
{
	width: 21%;
	height: auto;
}
.urunler2
{
	width: 75%;
	height: auto;
}
.urunler1 ul
{
	padding:0px;
	margin:0px;
	list-style-type:none;
}
.urunler1 ul li a
{
	display:block;
	border-bottom:3px solid red;
	text-decoration:none;
	color:black;
	width:100%;
	padding:10px;
}
</style>
</head>

<body>
<div id="wrap">
<div id="ust"><b><a href="#">Demirel Çiftlikten taze meyve, sebze, yoğurt...</a></b>
  <div id="search">
    
    <form id="form1" name="form1" method="post" action="arama.php">
    <input type="text" name="arama" id="textfield" placeholder="Yumurta, Domates, Süt..." /> 
    
   
    <button type="submit"><i class="fa fa-search"></i></button>
   </form>
  
  </div>
</div>
<div id="banner">
  <div id="img"></div>
  <div id="menu2">
 
</div>
  <div class="menu">
 <center>
  <ul>
  <li><a href="index.php"><i class="fas fa-home fa-1x"></i>&nbsp;<br />ANASAYFA</a></li>
  <li><a href="ciftlik.php"><i class="fas fa-feather fa-1x"></i>&nbsp;<br />ÇİFTLİK</a></li>
  <li><a href="urunler.php"><i class="fas fa-feather fa-1x"></i>&nbsp;<br />TÜM ÜRÜNLER</a></li>
  <li><a href="domates.php"><i class="fas fa-pepper-hot"></i>&nbsp;<br />DOMATES & BİBER</a></li>
   <li><a href="peynir.php"><i class="fas fa-cheese"></i>&nbsp;<br />SÜT & PEYNİR</a></li>
    <li><a href="yumurta.php"><i class="fas fa-egg"></i>&nbsp;<br />YUMURTA & SUCUK</a></li>
      <li><a href="salca.php"><i class="fas fa-glass-whiskey"></i>&nbsp;<br />SALÇA & TURŞU</a></li>
      <li><a href="ekmek.php"><i class="fas fa-bread-slice"></i>&nbsp;<br />EKMEK</a></li>
  </ul>
 </center>
</div>
</div>
<div class="icerik urunler1"><b style="background-color:red;color:white;padding:5px;font-size:20px">ÜRÜNLERİMİZ</b><br /><br />
<ul>
<li><a href="urunler.php">Tüm Ürünler</a></li>
<li><a href="domates.php" >Domates &amp; Biber</a></li>
<li><a href="yumurta.php" style="background-color:red;color:white;">Yumurta &amp; Sucuk</a></li>
<li><a href="peynir.php">Süt &amp; Peynir</a></li>
<li><a href="salca.php">Salça &amp; Turşu</a></li>
<li><a href="ekmek.php">Ekmek</a></li>
</ul><br /><br />
<img src="images/ücretsiz2-16-.png" width="100%" height="394" /> <br /><br />
<img src="images/basinda__ciftligmiz-29-.jpg" width="100%" height="254" /></div>
<div class="icerik urunler2"><?php
include("baglanti.php");
$sorgu = "select urun_id,urun_resim,urun_adi,urun_adi2,fiyat from urunler where kategori_id=3";
$stat = $baglan->prepare($sorgu);
$stat->execute();
$stat->bind_result($id,$resim2,$ad,$ad2,$fiyat);

 
 
while($stat->fetch())
{
	echo '<div style="padding:5px;border:1px solid #CCC;width:230px;float:left;margin:10px;">';
	echo "<a href=urun-detay.php?urun_id=$id>"."<img src=".$resim2." width='220' height='200' />"."</a>";
	echo "<br>";
	echo "<b>".$ad."</b>"."<br>";
	echo "<font size='2'>".$ad2."</font>"."<br>";
	echo "<font color='red'><b>".number_format($fiyat,2)." TL"."</b></font>";
	echo "</div>";
}

?></div>
<div id="footer"><small>&copy; DEMİREL ÇİFTLİK Tüm hakları saklıdır.&#8482;</small> </div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</div>
</body>
</html>