<?php

// carregar depois que a pagina estiver carregada
function scripts_js_carregar_onload(){

// valida usuario logado
if(retorne_usuario_logado() == true){

// campo chat
$campo_chat = "
\n
minimizar_chat_usuario_timer();
\n
";

};

// codigo html
$codigo_html .= "
\n
<script>
\n
inicializa_paginacao_conteudo_site();
\n
$campo_chat
</script>
\n
";

// retorno
return $codigo_html;

};

?>