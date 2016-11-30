<html>
<head>
	<meta charset='utf8'>
</head>
 <?php
	setcookie("Quest2",$_GET['p2']);
 ?>
<body>
<form action="pag4.php" method= "get">
<img src=patrono.jpg height="200" width="300"><br>
 O Patrono afasta qual criatura?<br>
 <input type="text" name="p3"><br>
 <input type="submit" value="Enviar">
 </form>

</body>
</html>