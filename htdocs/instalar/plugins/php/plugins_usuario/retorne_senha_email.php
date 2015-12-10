<?php

// retorna a senha por email
function retorne_senha_email($email, $modo){

// tabelas
$tabela = TABELA_CADASTRO;

// query
$query = "select *from $tabela where email='$email';";

// dados
$dados = retorne_dados_query($query);

// retorno
if($modo == true){

// senha normal
return $dados['senha_normal'];

}else{

// senha cifrada
return $dados['senha'];

};

};

?>