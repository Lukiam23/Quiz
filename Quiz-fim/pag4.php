<html>
<head>
	<meta charset='utf8'>
</head>
<?php
	setcookie("Quest3",$_GET['p3']);
 ?>
<body>
<form action="final.php" method= "get">
<img src=camara.jpg height="200" width="300"><br>
 Qual o nome da criatura que quardava a camara secreta?<br>
	<input type="radio" name="p4" value="wrong">  Grifo<br>
	<input type="radio" name="p4" value="right">  Basilisco<br>
	<input type="radio" name="p4" value="wrong">  Troll<br>
 <input type="submit" value="Enviar">
 </form>
 
</body>
</html>