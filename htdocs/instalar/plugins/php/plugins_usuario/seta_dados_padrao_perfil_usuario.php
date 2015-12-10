<?php

// seta os dados padrao do perfil do usuario
function seta_dados_padrao_perfil_usuario(){

// globals
global $idioma;

// tabela
$tabela = TABELA_PERFIL;

// idusuario
$idusuario = retorne_idusuario_logado();

// query
$query[0] = "select *from $tabela where idusuario='$idusuario';";

// seta dados padrao
$nome = "$idioma[131] - $idusuario";
$imagem_perfil = retorne_imagem_servidor(6);
$imagem_perfil_miniatura = retorne_imagem_servidor(7);
$data = data_atual();

// valida seta configuracoes de padrao deperfil
if(retorne_numero_linhas_query($query[0]) == 0){
	
	// query
	$query[1] = "insert into $tabela values('$idusuario', '$imagem_perfil', '$imagem_perfil_miniatura', '$nome', '', '', '', '','', '', '', '', '', '', '', '$data');";
	
	// salva as configuracoes padrao
	comando_executa($query[1]);
	
};

};

?>