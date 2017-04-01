<!DOCTYPE html>
<html>
<head>
    <title>hat-bazar</title>
	<?php include("css.php"); ?>	
</head>
<body>
	<div > <?php include("header.php") ?> </div> 

<?php 
$link = urldecode($_GET["src"]);
//echo '<img src='.$_GET["src"].' alt="'.$_GET["src"].'" width="30%" height="25%" >';
echo '<img src='.$_GET["src"].' alt="'.$_GET["src"].'"  >';
?>
<img src="image/hat-bazar.jpg">


</body>
</html>
