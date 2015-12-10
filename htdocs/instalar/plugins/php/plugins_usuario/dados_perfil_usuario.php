<?php

// retorna os dados do perfil do usuario
function dados_perfil_usuario($idusuario){

// globals
global $idioma;

// tabelas
$tabela[0] = TABELA_PERFIL;

// query
$query[0] = "select *from $tabela[0] where idusuario='$idusuario';";

// dados
$dados = retorne_dados_query($query[0]);

// valida perfil ja configurado
if($dados['idusuario'] == null){

// seta dados padrao
$dados['idusuario'] = $idusuario;
$dados['nome'] = "$idioma[131] - $idusuario";
$dados['imagem_perfil'] = retorne_imagem_servidor(6);
$dados['imagem_perfil_miniatura'] = retorne_imagem_servidor(7);

};

// retorno
return $dados;

};

?>