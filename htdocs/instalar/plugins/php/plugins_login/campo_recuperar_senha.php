<?php

// campo recuperar senha
function campo_recuperar_senha(){

// globals
global $idioma;

// codigo html
$codigo_html = "
$idioma[145]
<br>
<br>
<input type='text' placeholder='$idioma[5]' id='id_campo_recupera_senha' onkeydown='if(event.keyCode == 13){recuperar_senha_usuario();}'>
<br>
<br>
<input type='button' value='$idioma[144]' class='botao_padrao' onclick='recuperar_senha_usuario();'>
";

// adiciona o dialogo
$codigo_html = janela_mensagem_dialogo($idioma[146], $codigo_html, "id_dialogo_recuperar_senha_usuario");

// codigo html
$codigo_html = "
<div class='classe_div_campo_recuperar_senha'>
<div id='id_elemento_exibe_recuperar_senha'><a href='#' title='$idioma[146]' onclick='dialogo_recuperar_senha_usuario();'>$idioma[146]</a></div>
<div id='id_mensagem_recuperou_senha_usuario'></div>
</div>
$codigo_html
";

// retorno
return $codigo_html;

};

?>