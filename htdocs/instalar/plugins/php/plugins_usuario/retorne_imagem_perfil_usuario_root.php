<?php

// retorna a imagem de perfil no modo root
function retorne_imagem_perfil_usuario_root(){

// id de usuario
$idusuario = retorne_idusuario_logado();

// dados de imagem de perfil
$dados_imagem = retorne_imagem_perfil_usuario($idusuario);

// separa dados de imagem de perfil
$imagem_perfil = basename($dados_imagem['imagem_perfil']);
$imagem_perfil_miniatura = basename($dados_imagem['imagem_perfil_miniatura']);

// pasta de usuario modo root
$pasta_usuario = retorne_pasta_usuario($idusuario, 1, true);

// atualiza enderecos de imagens
$imagem_perfil = $pasta_usuario.$imagem_perfil;
$imagem_perfil_miniatura = $pasta_usuario.$imagem_perfil_miniatura;

// dados de retorno
$dados['imagem_perfil'] = $imagem_perfil;
$dados['imagem_perfil_miniatura'] = $imagem_perfil_miniatura;

// retorno
return $dados;

};

?>