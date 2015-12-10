<?php

// retorna o numero de usuarios online de chat
function retorne_numero_usuarios_online_chat(){

// globals
global $idioma;

// tabela
$tabela = TABELA_AMIZADE;

// id de usuario
$idusuario = retorne_idusuario_logado();

// query
$query = "select *from $tabela where idamigo='$idusuario';";

// comando
$comando = comando_executa($query);

// numero de linhas
$numero_linhas = retorne_numero_linhas_comando($comando);

// contador
$contador = 0;

// numero de usuarios online
$numero_usuarios_online = 0;

// cria lista de usuarios
for($contador == $contador; $contador <= $numero_linhas; $contador++){

// dados
$dados = mysql_fetch_array($comando, MYSQL_ASSOC);

// valida usuario online
if(retorne_usuario_online($dados['idusuario']) == true){

// incrementa
$numero_usuarios_online++;

};

};

// retorno
return $numero_usuarios_online;

};

?>