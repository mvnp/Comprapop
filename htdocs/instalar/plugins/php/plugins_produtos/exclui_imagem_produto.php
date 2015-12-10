<?php

// exclui a imagem de produto
function excluir_imagem_produto(){

// id de imagem
$idimagem = retorne_idimagem_get();

// tabela
$tabela = TABELA_IMAGENS_ALBUM;

// id de usuario logado
$idusuario = retorne_idusuario_logado();

// query
$query = "delete from $tabela where id='$idimagem' and idusuario='$idusuario';";

// valida usuario logado e executa query
if(retorne_usuario_logado() == true){

// rodando query...
comando_executa($query);

};

};

?>