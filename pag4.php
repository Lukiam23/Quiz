<html>
<head>
	<meta charset='utf8'>
</head>
<body>
<form action="final.php" method= "get">
<img src=camara.jpg height="200" width="300"><br>
 Qual o nome da criatura que quardava a camara secreta?<br>
	<input type="radio" name="p4" value="wrong">  Grifo<br>
	<input type="radio" name="p4" value="right">  Basilisco<br>
	<input type="radio" name="p4" value="wrong">  Troll<br>
 <input type="hidden" name="r3f" value=<?php echo $p2=$_GET['p3'];?>><br>
 <input type="hidden" name="r1f" value=<?php echo $p1=$_GET['r2'];?>><br>
 <input type="hidden" name="r2f" value=<?php echo $p2=$_GET['r3'];?>><br>
 <input type="submit" value="Enviar">
 </form>
</body>
</html>