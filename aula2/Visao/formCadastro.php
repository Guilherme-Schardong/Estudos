<?php include("../controle/controle_cliente.php")?>
		
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript"src="../js/cliente.js" ></script>
	
	
</head>
		
<body>
	<form action="" >
		Nome: <input type="text" id="nome" name="nome" ><br>
		Idade:<input type="text" id="idade"name="idade" >
		
		<input type="button" id="insere" value="Gravar" onClick="cadastrar();">
		<input type="hidden"  name="acao" value="insere">
	
	</form>
	
	
	
	
	<br>
	<input type="button" onClick="telaListar();" value="Listar Clientes"></input>
</body>
</html>