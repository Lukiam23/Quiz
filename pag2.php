<html>
<head>
	<meta charset='utf8'>
</head>
<body>
<form action="pag3.php" method= "get">
<img src=crucio.jpg><br>
 Cruciatos é uma maldição imperdoavel?<br>
 <input type="text" name="p2"><br>
 <input type="hidden" name="r1" value=<?php echo $p1=$_GET['p1']; ?>>
 <input type="submit" value="Enviar">
 </form>
</body>
</html>