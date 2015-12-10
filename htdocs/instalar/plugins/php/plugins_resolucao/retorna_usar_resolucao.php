<?php

// retorna usar resolucao
function retorna_usar_resolucao(){

// valida permite mobile
if(CONFIG_PERMITIR_MOBILE == false){

// retorno nulo
return null;

};

// inicia a sessao
session_start();

// retorno
return $_SESSION[USAR_RESOLUCAO_SISTEMA];

};

?>