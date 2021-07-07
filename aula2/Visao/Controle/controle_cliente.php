<?php
////Modulos- Start
include("../../Controle/controle_cliente.php");

	
////Modulos- End

//var_dump($_POST);
/// Recebe valores - Start
	$nomeCliente = $_POST["nome"];
	$idadeCliente = $_POST["idade"];
	@$idCliente = $_POST["id"];

	$acao = $_POST["acao"];
/// Recebe valores - End

	$obj_cliente = new Cliente();


if($acao == "insere"){
	
	///chamado do metodo - Start
	$result = $obj_cliente->insere($nomeCliente,$idadeCliente);
	///chamado do metodo - End
     

	
	}
	else if($acao == "atualizar"){
		
		$result = $obj_cliente->altera($nomeCliente,$idadeCliente,$idCliente);
		
		
			
	}
	else if($acao =="deletar"){
		$result= $obj_cliente->deletar($idCliente);
		
		
	}
	
	

?>