<?php

// campo excluir conta de usuario
function campo_excluir_conta_usuario(){

// globals
global $idioma;

// id de usuario
$idusuario = retorne_idusuario_logado();

// nome de usuario logado
$nome_usuario = retorne_nome_usuario($idusuario);

// mensagem de sistema
$mensagem_sistema = mensagem_sistema($nome_usuario.$idioma[153].$idioma[154]);

// codigo html
$codigo_html = "

<div class='classe_div_mensagem_excluir_conta'>
$mensagem_sistema
</div>

<div class='classe_div_campos_excluir_conta'>

<div class='classe_div_campos_excluir_conta_div_1'>
<input type='password' placeholder='$idioma[6]' id='id_campo_senha_excluir_conta'>
</div>

<div class='classe_div_campos_excluir_conta_div_2'>
<input type='button' value='$idioma[155]' class='botao_padrao' onclick='excluir_conta_usuario();'>
</div>

</div>

";

// retorno
return $codigo_html;

};

?>