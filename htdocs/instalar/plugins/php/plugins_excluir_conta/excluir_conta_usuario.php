<?php

// exclui a conta do usuario
function excluir_conta_usuario(){

// globals
global $tabelas_disponiveis;

// dados de formulario
$senha = cifra_senha_md5(remove_html($_REQUEST["senha"]));

// senha de cookie
$senha_cookie = retorne_senha_cookie();

// id de usuario logado
$idusuario = retorne_idusuario_logado();

// valida senha de usuario
if($senha != $senha_cookie or retorne_usuario_logado() == false){

    // retorno nulo
    return null;
	
};

// lista tabelas
foreach($tabelas_disponiveis as $tabela){

    // valida tabela
    if($tabela != null){

	    // valida tipo de tabela
	    switch($tabela){
			
			case TABELA_CADASTRO:
			$query[] = "delete from $tabela where id='$idusuario';";
			break;
			
			case TABELA_CATEGORIAS:
			$query[] = null;
			break;
			
			default:
			$query[] = "delete from $tabela where idusuario='$idusuario';";
			$query[] = "delete from $tabela where idusuario='$idusuario' or idamigo='$idusuario';";

		};

		
	};	
	
};

// executando querys
executador_querys($query);

// excluindo arquivos de usuario
excluir_pastas_subpastas(retorne_pasta_usuario($idusuario, 0, true));

// zera cookies, e sessao
salvar_cookies(null, null, true);

// retorno
return -1;

};

?>