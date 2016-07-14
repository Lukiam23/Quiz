<html>
<head>
	<meta charset='utf8'>
</head>
<body>
<form action="pag4.php" method= "get">
<img src=patrono.jpg height="200" width="300"><br>
 O Patrono afasta qual criatura?<br>
 <input type="text" name="p3"><br>
 <input type="hidden" name="r2" value=<?php echo $p1=$_GET['r1'];?>><br>
 <input type="hidden" name="r3" value=<?php echo $p2=$_GET['p2'];?>><br>
 <input type="submit" value="Enviar">
 </form>
</body>
</html>