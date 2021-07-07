<?php include("../controle/controle_cliente.php")?>
<?php $id = $_GET['id']; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>

	<script type="application/javascript"src="../js/cliente.js" ></script>
	
</head>
	<?php
	///instanciar a classe cliente - Start
	$obj_cliente = new Cliente();
	///instanciar a classe cliente - End
	$arrayCliente=$obj_cliente->busca($id);
	
	
	?>
<body>
	
	<form action="../Visao/controle/controle_cliente.php" method="POST">
		Nome: <input type="text" name="nome"value="<?php echo $arrayCliente[0]['nomeCliente']?>"><br>
		Idade:<input type="text" name="idade"value="<?php echo $arrayCliente[0]['idadeCliente']?>">
		<input type="hidden" name="id" value="<?php echo $arrayCliente[0]['idCliente']?>">
		<input type="submit" value="Deletar">
		<input type="hidden"  name="acao" value="deletar">
	
	</form>
	
	
	
	
	<br>
	<input type="button" onClick="telaListar();" value="Listar Clientes"></input>
</body>
</html>