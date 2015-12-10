<?php

// limit de query de mensagens de chat
function limit_query_mensagens_chat(){
// usado mais quando se inicia o chat!!!

// limite de mensagens
$limite = CONFIG_LIMIT_CHAT_MENSAGENS;

// limit
$limit = "limit $limite";

// retorno
return $limit;

};

?>