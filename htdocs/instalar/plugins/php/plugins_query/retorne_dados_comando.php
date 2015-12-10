<?php

// retorna os dados do comando
function retorne_dados_comando($comando){

// dados
$dados = mysql_fetch_array($comando, MYSQL_ASSOC);

// retorno
return $dados;

};

?>