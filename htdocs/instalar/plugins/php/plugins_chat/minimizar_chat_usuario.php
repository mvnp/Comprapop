<?php

// minimizar ou maximizar o chat do usuario
function minimizar_chat_usuario(){

// valor atual
$valor_atual = remove_html($_REQUEST['valor_atual']);

// salva o valor em sessao
$_SESSION[CONFIG_SESSAO_MINIMIZAR_CHAT] = $valor_atual;

};

?>