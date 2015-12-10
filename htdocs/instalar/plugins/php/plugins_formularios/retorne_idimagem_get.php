<?php

// retorna o id de imagem modo get
function retorne_idimagem_get(){

// globals
global $requeste;

// retorno
return remove_html($_REQUEST[$requeste[6]]);

};

?>