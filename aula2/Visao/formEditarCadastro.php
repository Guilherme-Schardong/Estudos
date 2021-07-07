<?php include("../controle/controle_cliente.php")?>
<?php $id = $_POST['id']; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript"src="../js/cliente.js" ></script>
	
	
</head>
	<?php
	
	
	///instanciar a classe cliente - Start
	$obj_cliente = new Cliente();
	///instanciar a classe cliente - End
	$arrayCliente=$obj_cliente->busca($id);
	
	
	?>
<body>
	
	<form id='FormEditar' >
		Nome: <input type="text" id="nome" name="nome" value="<?php echo $arrayCliente[0]['nomeCliente']?>"><br>
		Idade:<input type="text" id="idade" name="idade" value="<?php echo $arrayCliente[0]['idadeCliente']?>">
		<input type="hidden" id="id"  name="id" value="<?php echo $arrayCliente[0]['idCliente']?>">
		
		<input type="button" id="atualizarBtn"onClick="atualizar();" value="Atualizar">
		<input type="hidden"  name="acao" value="atualizar">
	
	</form>
	
	
	
	
	<br>
	<input type="button" onClick="telaListar();" value="Listar Clientes"></input>
</body>
</html>