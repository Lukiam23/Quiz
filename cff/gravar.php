<?php
include "valida_sessao.inc";
include "conecta_mysql.inc";
// Obtem o usuario que efetuou o login
$nome_usuario = $_SESSION["nome_usuario"];
// Obtem informacoes digitadas
$t = $_POST['t'];
$nome = $_POST['nome'];
$classe = $_POST['classe'];
$mesRef = $_POST['mesRef'];
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];
$usuario = $_SESSION['nome_usuario'];

// Validacao dos campos nome e valor.
if(empty($nome) or empty($valor)) 
{
	$erro = 1;
	$msg = "Por favor, preencha todos os campos obrigatórios.";
} 
elseif ((substr_count($valor , '.')!=1) or (!is_numeric($valor))) 
{
	$erro = 1;
	$msg = "Digitar o campo valor apenas com números e no formato (xx.xx).";
} 
else 
{
	// Tratamento da Descricao
	if (empty($descricao)) {
		$descricao = NULL;
	}
	// Id do usuario que efetuou o login
	$resultado = mysql_query("SELECT id FROM usuarios WHERE login='$nome_usuario'");
	$idUsuario = mysql_result($resultado,0,"id");
	// Data e Hora
	$datahora= date("Y-m-d H:i:s");
	// Formatar o valor para duas casas decimais.
	$valor = number_format($valor, 2, '.', '');
	// Comandos SQL para insercao na base de dados.
	$comandoSQL = "insert into receitasdespesas(nome,tipo,classe,mes_referencia,datahora,valor,usuario,descricao) values ('$nome','$t','$classe','$mesRef','$datahora','$valor','$idUsuario','$descricao')";
	if($t==1)
	{
		$comandoUpdate = "UPDATE usuarios SET star_coins = star_coins+'$valor' where login='$usuario'";
		$resultadoStar_Coins = mysql_query($comandoUpdate) or die('Erro com o star_coins');
	}
	else
	{
		$comandoUpdate = "UPDATE usuarios SET star_coins = star_coins-'$valor' where login='$usuario'";
		$resultadoStar_Coins = mysql_query($comandoUpdate) or die('Erro com o star_coins');
	}
	
	$resultado = mysql_query($comandoSQL) or die('Erro fatal durante operação com base de dados');
	$msg ="Inclusão realizada com sucesso.";
}
mysql_close($con);
?>
<html>
<head><title>Controle de Finanças Empresarial</title></head>
<body>
<center>
<?php
if($t==1)
{

echo "
	<iframe src='giphy.gif' width='520' height='473'></iframe>
	<audio autoplay>
	  <source src='coin.ogg' type='audio/ogg'>
	  <source src='coin.mp3' type='audio/mpeg'>
	</audio>";

}?>

<?php
if($t==2)
{
echo "
	<iframe src='despesas.gif' width='520' height='515'></iframe>
	<audio autoplay>
	<source src='coin.ogg' type='audio/ogg'>
	<source src='debito.wav' type='audio/mpeg'>
	</audio>";

}?>

<h1> Sistema de Controle de Financas </h1>
<hr width="700px"/><br/>
<?php echo "<p>".$msg."</p>"; ?>
<p><a href="principal.php">Voltar</a></p>
</center>
</body>
</html>