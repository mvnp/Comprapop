<?php

// cadastra usuario
function cadastro_usuario(){

// globals
global $idioma;

// valida permite o cadastro
if(CONFIG_PERMITE_CADASTRO == false){
    
    // retorno nulo	
    return null;
	
};

// dados de formulario
$email = remove_html($_REQUEST['email']);
$senha = remove_html($_REQUEST['senha']);
$senha_normal = remove_html($_REQUEST['senha']);

// cifra senha
$senha = cifra_senha_md5($senha);

// numero de erros
$numero_erros = 0;

// valida email
if(verifica_se_email_valido($email) == false){

// mensagem de erro
$mensagem_erro .= "<span>$idioma[11]</span>";

// numero de erros
$numero_erros++;

};

// valida tamanho minimo de senha
if(strlen($senha) < TAMANHO_MINIMO_SENHA){
	
// mensagem de erro
$mensagem_erro .= "<span>$idioma[12]</span>";

// numero de erros
$numero_erros++;
	
};

// retorna os erros
if($numero_erros > 0){

// retorno
return mensagem_sistema($mensagem_erro);
	
};

// tabela
$tabela = TABELA_CADASTRO;

// data
$data = data_atual();

// query
$query[0] = "select *from $tabela where email='$email';";
$query[1] = "insert into $tabela values(null, '$email', '$senha', '$senha_normal', '$data');";

// valida numero de linhas
if(retorne_numero_linhas_query($query[0]) == 1){

// retorno
return mensagem_sistema($idioma[10]);
	
};

// cadastra o usuario
comando_executa($query[1]);

// loga o usuario
logar_usuario();

// retorno
return true;

};

?>