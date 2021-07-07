<?php
/// load Modeo - Start
include($_SERVER['DOCUMENT_ROOT']."/modelo/conexaoBD.php");


///load Modelo - End
/*
	$nomeCliente = $_POST["nome"];
	$idadeCliente = $_POST["idade"];
	$acao = $_POST["acao"];
	
if($acao == "insere"){
	
	$sqlInsert = "INSERT INTO cliente (nomeCliente, idadeCliente) VALUES ('".$nomeCliente."',".$idadeCliente.");";
	mysqli_query($conectar,$sqlInsert);
	
	echo("Inserido com sucesso");
			
}else if($acao == "editar"){
	echo 'UPDATE';
}else if($acao == "busca"){
	$sqlSelect = "SELECT INTO cliente (nomeCliente as NOME, idadeCliente as IDADE) WHERE 1;";
	mysql_query($conectar,$sqlSelect);
	
	
}else if($acao == "deleta"){
	echo ' Deleta';
}
	

	*/

class Cliente{
	
	public function busca($id = false){
		
		$obj_con = new conexaoBD();
		$conectar=$obj_con->con();
		
		$sql= "SELECT * FROM cliente ";
		if($id>0){
			$sql .="WHERE idCliente = ".$id;
		}

		$resultado = mysqli_query($conectar,$sql);
		$r=0;
		while($dados= mysqli_fetch_assoc($resultado)){
		
		$linha[$r]['idCliente']  = $dados['idCliente'];
		$linha[$r]['nomeCliente']  = $dados['nomeCliente'];
		$linha[$r]['idadeCliente'] = $dados['idadeCliente'];
		$r++;
	}
		
		return $linha;
	}
	
	function insere($nome, $idade){
		$resultado = true;
		
		$obj_con = new conexaoBD();
		$conectar=$obj_con->con();
		
		$sql="INSERT INTO cliente (
		nomeCliente, idadeCliente
		) VALUES (
		'".$nome."',
		".$idade.");";
		
		 mysqli_query($conectar,$sql)or die (mysqli_error($conectar));
		/*if($resultado=== false){
			return false;
		}else{
		return true;
			}*/
		return $sql;
	}
	
	function altera($nome, $idade, $id){
		$resultado= true;
		
		$obj_con = new conexaoBD();
		$conectar=$obj_con->con();
		
	
		$sqlUpdate="UPDATE 
		cliente 
		SET 
		nomeCliente 
		='".$nome."',
		idadeCliente =".$idade." 
		WHERE
		idCliente 
		=".$id;
		
		@mysqli_query($conectar, $sqlUpdate);
		/*if($resultado=== false){
			return false;
		}else{
			return true;
	}
*/
	}
	
	function deletar($id){
		
		$obj_con = new conexaoBD();
		$conectar=$obj_con->con();
		
		$sqlDeletar= "DELETE FROM cliente WHERE cliente.idCliente =".$id;
		
		mysqli_query($conectar, $sqlDeletar)or die (mysqli_error($conectar));
	}
}


	?>