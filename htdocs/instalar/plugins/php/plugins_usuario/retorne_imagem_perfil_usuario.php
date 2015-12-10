<?php

// retorna a imagem de perfil de usuario
function retorne_imagem_perfil_usuario($idusuario){

// tabela
$tabela = TABELA_PERFIL;

// query
$query = "select imagem_perfil, imagem_perfil_miniatura from $tabela where idusuario='$idusuario';";

// dados
$dados = retorne_dados_query($query);

// url de imagem de perfil
$imagem_perfil = $dados['imagem_perfil'];
$imagem_perfil_miniatura = $dados['imagem_perfil_miniatura'];

// valida imagem de perfil
if($imagem_perfil == null or $imagem_perfil_miniatura == null){

$dados['imagem_perfil'] = retorne_imagem_servidor(6);
$dados['imagem_perfil_miniatura'] = retorne_imagem_servidor(7);

};

// retorno
return $dados;

};

?>