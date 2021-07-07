<?php include("../controle/controle_cliente.php")
		?>
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
	$arrayCliente=$obj_cliente->busca();
	?>
<body>
	
	<table border="1">
		<tr>
			<td>Nome</td>
			<td>Idade</td>
			<td style= "text-align: center">Ação</td>
		</tr>
	
	
	
	
	<?php
	foreach($arrayCliente as $value){
		?>
		<tr>
			<td><?php echo $value['nomeCliente']?></td>
			<td><?php echo $value['idadeCliente']?></td>
			
			<td><input type="button" onClick="telaEditar(<?php echo $value['idCliente']?>)" value="Editar"></input>
			<input type="button" onClick="Deletar(<?php echo $value=['idCliente']?>)"value="Deletar"</td>
		</tr>
		<?php	
			}
			?>
	</table>
	<br>
		
	<input type="button" onClick="telaCadastrar();" value="Tela de cadastro"></input>

	<form id="formulario" action="formEditarCadastro.php" method="POST">
		<input type="hidden" id="idFormulario" name="id">
	</form>
	
	
</body>
</html>