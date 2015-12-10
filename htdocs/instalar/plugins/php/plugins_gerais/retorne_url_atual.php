<?php

// retorna a url atual
function retorne_url_atual(){

// obtendo dados de servidor
$url_servidor = $_SERVER['SERVER_NAME'];
$endereco_url = $_SERVER ['REQUEST_URI'];

// retorno
return "http://".$url_servidor.$endereco_url;

};

?>