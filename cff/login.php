<?php
$username = $_POST["username"];
$senha = md5($_POST["senha"]);

include "conecta_mysql.inc";

$resultado = mysql_query ("SELECT * FROM usuarios where login = '$username'");
$linhas = mysql_num_rows($resultado);

if($linhas==0)
{
	echo "<html><body>";
	echo "<p align=\"center\">Usuário não encontrado!</p>";
	echo "<p align =\"center\"><a href=\"index.html\">Voltar</a></p>";
	echo "</body></html>";
}
else
{
	if($senha!=mysql_result($resultado, 0, "senha"))
	{
		echo "<html><body>";
		echo "<p align =\"center\">A senha está incorreta!</p>";
		echo "<p align =\"center\"><a href=\"index.html\">Voltar</a></p>";
		echo "</body></html>";
	}
	else
	{
		$id = mysql_result($resultado,0, "id");
		$perfil = mysql_result($resultado, 0, "perfil");
		session_start();
		$_SESSION['nome_usuario'] = $username;
		$_SESSION['senha_usuario'] = $senha;
		$_SESSION['perfil_usuario'] = $perfil;
		$_SESSION['id_usuario'] = $id;
		header ("Location:principal.php");
	}
}
mysql_close($con);
?>