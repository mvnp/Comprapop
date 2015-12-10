<?php

// constroe o chat do usuario
function constroe_chat_usuario(){

// globals
global $idioma;

// valida usuario logado
if(retorne_usuario_logado() == false){

// retorno nulo
return null;

};

// imagem de lixeira
$imagem_lixeira = estado_lixeira();

// conteudo de dialogo de lixeira
$conteudo_dialogo .= $idioma[89];
$conteudo_dialogo .= "<br>";
$conteudo_dialogo .= "<br>";
$conteudo_dialogo .= "<input type='button' class='botao_padrao' value='$idioma[90]' onclick='limpa_mensagem_chat(1);'>";
$conteudo_dialogo .= "&nbsp;";
$conteudo_dialogo .= "<input type='button' class='botao_padrao' value='$idioma[91]' onclick='limpa_mensagem_chat(2);'>";

// campo dialogo lixeira
$campo_dialogo_lixeira = janela_mensagem_dialogo($idioma[88], $conteudo_dialogo, "id_dialogo_limpar_mensagens_chat");

// campo opcoes de chat
$campo_opcoes = "
<div class='classe_div_campo_opcoes_chat'>

<div onclick='dialogo_limpa_mensagem_chat();' id='classe_div_campo_opcoes_chat_lixeira'>
$imagem_lixeira
</div>

</div>
$campo_dialogo_lixeira
";

// campo publicar
$campo_publicar = "
<div class='classe_div_chat_publicar' id='id_div_chat_publicar'>

<div class='classe_div_chat_conversa_recebidas' id='id_div_chat_conversa' onscroll='carrega_mensagens_chat();'></div>

<div class='classe_div_chat_publicar_mensagem'>
<input type='text' id='id_campo_escrever_mensagem' placeholder='$idioma[83]' onkeydown='if(event.keyCode == 13){envia_mensagem_usuario();}'>
</div>

<div class='classe_div_chat_publicar_botao'>
<input type='button' class='botao_padrao' value='$idioma[82]' onclick='envia_mensagem_usuario();'>
</div>

$campo_opcoes

</div>
";

// numero de usuarios online
$numero_usuarios_online = retorne_numero_usuarios_online_chat();

// campo gerencia o chat
$campo_gerencia_chat = "
<div class='div_classe_campo_gerencia_chat' id='id_campo_gerencia_chat' onclick='minimizar_chat_usuario();'>
<span>$idioma[22] - </span><span id='id_span_numero_usuarios_chat'>$numero_usuarios_online</span>
</div>
";

// codigo html
$codigo_html = "
$campo_gerencia_chat
$campo_publicar
<div class='classe_div_chat_usuarios' id='id_div_chat_usuarios' onscroll='carrega_usuarios_chat();'></div>
";

// retorno
return $codigo_html;

};

?>