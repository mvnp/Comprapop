<?php

// recupera senha de usuario
function recuperar_senha_usuario(){

// globals
global $idioma;

// email
$email = remove_html($_REQUEST['email']);

// valida email valido
if(verifica_se_email_valido($email) == false){

// retorno
return mensagem_sistema($idioma[11]);

};

// id de usuario
$idusuario = retorne_idusuario_email($email);

// valida idusuario
if($idusuario == null){

// retorno
return mensagem_sistema($idioma[147]);

};

// senha de usuario
$senha = retorne_senha_email($email, true);

// valida senha ja enviada
if($_SESSION[md5($email)] == $email){

// retorno
return mensagem_sistema_sucesso($idioma[148]);

};

// atualiza a sessao
$_SESSION[md5($email)] = $email;

// nome do usuario
$nome_usuario = retorne_nome_usuario($idusuario);

// corpo da mensagem
$corpo_mensagem = "
$nome_usuario$idioma[150]$idioma[151]$senha
";

// envia mensagem com a senha
enviar_email($email, $nome_usuario.$idioma[149], $corpo_mensagem);

// retorno
return mensagem_sistema_sucesso($idioma[148]);

};

?>