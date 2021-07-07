<?php
	/// modelo - Start
	/// conexao banco
	//$conectar = mysqli_connect("localhost","root","")or die(mysqli_error());
	/// Seleciona o banco
	//mysqli_select_db($conectar,"mvc")or die(mysqli_error());
	/// modelo - End
	
class conexaoBD {
	
	public function con(){
		$conectar = mysqli_connect("localhost","root","")or die(mysqli_error());
		// selecio o banco
		mysqli_select_db($conectar,"mvc")or die(mysqli_error());
		
		return $conectar;
	}
}





/*
	$sql= "SELECT * FROM cliente";

	$resultado = mysqli_query($conectar,$sql);

	while($dados= mysqli_fetch_assoc($resultado)){
		
			echo "Nome:". $dados ['nomeCliente'].'<br>';
			echo "Idade:". $dados ['idadeCliente'].'<br>';
		
	}
*/

?>