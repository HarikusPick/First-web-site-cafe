<?php 
require("ayar.php");
if(empty($_SESSION["login"])){
	echo '<h1> Önce Giriş Yapınız </h1>';
	header("Refresh:1;url=login.php");
	exit();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="admin/style.css">
<body>
<div id="header">
	<h1>BANNER RESİM VB.</h1>
</div>

<div id="menu">
<?php include("menu.php"); ?>
</div>
<div id="content"></div>
<div id="footer">Bütün Haklarını Sakladık. Kopi rayt 2017 Oğuzhan Yavuz</div>
</body>
</html>
