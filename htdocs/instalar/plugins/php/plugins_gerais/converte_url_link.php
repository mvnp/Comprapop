<?php

// converte url em link
function converte_url_link($conteudo_post){

// 1° converte url em links
$conteudo_post = preg_replace("/([\w]+\:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/", "<a href='$1' title='$1' target='_blank'>$1</a>", $conteudo_post); // converte url em links

// retorno
return $conteudo_post; // retorno

};

?>