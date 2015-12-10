<?php

// formulario de login
function formulario_login(){

// global
global $idioma;

// redireciona para o perfil
if(retorne_usuario_logado() == true){

// perfil do usuario
chama_perfil_usuario();

// retorno nulo
return null;
	
};

// campo recuperar a senha
$campo_recupera_senha = campo_recuperar_senha();

// campo cadastro de usuario
if(CONFIG_PERMITE_CADASTRO == true){

    // campo cadastro de usuario
    $campo_cadastro = "
	
    $idioma[8]
    <input type='button' value='$idioma[9]' class='botao_cadastro' onclick='cadastro_usuario();'>
    
	";	
	
};

// codigo html
$codigo_html = "
<div class='classe_mensagem_login_cadastro' id='id_mensagem_login_cadastro'></div>

<div class='formulario_login_separa_div'>
<span class='formulario_login_span_descricao_topo'>$idioma[7]</span>
<input type='text' id='id_email_login' placeholder='$idioma[5]' onkeydown='if(event.keyCode == 13){logar_usuario();}'>
<input type='password' id='id_senha_login' placeholder='$idioma[6]' onkeydown='if(event.keyCode == 13){logar_usuario();}'>
</div>

<div class='formulario_login_separa_div'>
<input type='button' value='$idioma[4]' class='botao_padrao' onclick='logar_usuario();'>
$campo_cadastro
</div>

";

// constroe o formulario
$codigo_html = constroe_formulario($codigo_html);

$codigo_html .= $campo_recupera_senha;

// retorno
return $codigo_html;

};

?>