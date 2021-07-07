// JavaScript Document// JavaScript Document

function telaListar(){
	
	
		//console.log('Foi para a tela de cadastro');
		window.location.href='listarClientes.php';
			
}

function telaCadastrar(){
	
	window.location.href='formCadastro.php';
}

function telaEditar(valor){
	
	$('#idFormulario').val(valor);
	$('#formulario').submit();
	
	//window.location.href='formEditarCadastro.php?id='+id;
	//window.location.href='formEditarCadastro.php?id='+valor;
}

function atualizar(){
	
	//var nome = document.getElementById('nome').value;
	//var idade =document.getElementById('idade').value;
	//var id = document.getElementById('id').value;
	
	nome = $('#nome').val();
	idade = $('#idade').val();
	id = $('#id').val();
	
	$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"atualizar",nome:nome,idade:idade,id:id},
		
		success:function(data){
			//console.log(data);
			//console.log(nome);
			//console.log(idade);
			//console.log(id);
			//console.log("Atualizado");
			telaListar();
		}
	
})
}

function cadastrar(){
	
	//var nome = document.getElementById('nome').value;
	//var idade = document.getElementById('idade').value;
	
	nome = $('#nome').val();
	idade = $('#idade').val();
	
	
	$.ajax({
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"insere",nome:nome,idade:idade},
		
		success:function(data){
			console.log(data);
			alert('Cadastrado');
			telaListar();
		}
	})
	
	//alert('Cadastrado');
	
	//telaCadastrar();
}





function Deletar(valor){
	//window.location.href='deletar.php?id='+valor;
	//console.log(valor);
	//window.location.href='formEditarCadastro.php?id='+valor;
	var result = confirm("Voce tem certeza?");
	
	if(result== true){

	
	$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"deletar",id:valor},
		
		
		success:function(data){
			console.log("Deletado");
			window.location.href='listarClientes.php';
		}
	});
		
	}else{
		alert('Não apagou');
	}
}