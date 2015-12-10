<?php

// retorna se o id de usuario existe
function retorne_idusuario_existe($idusuario, $redirecionar){

// tabela
$tabela = TABELA_CADASTRO;

// valida idusuario nao e nulo
if($idusuario == null){

// retorna verdadeiro
return true;

};

// query
$query = "select *from $tabela where id='$idusuario';";

// valida existencia de usuario
if(retorne_numero_linhas_query($query) == 0){

// redireciona
if($redirecionar == true){


// so redireciona se o usuario estiver logado
if(retorne_usuario_logado() == true){

// chama pagina inicial
chama_pagina_inicial();

// id de usuario nao existe
return false;

}else{

// id de usuario nao existe
return false;

};

}else{

// id de usuario nao existe
return false;

};

}else{

// usuario existe
return true;

};

};

?>