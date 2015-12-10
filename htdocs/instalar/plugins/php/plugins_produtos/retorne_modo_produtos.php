<?php

// retorna o modo produtos
function retorne_modo_produtos(){

// globals
global $idioma;

// valida categoria de produto
if(retorne_categoria_produto_get() != null){

// modo produtos por categoria
return true;

};

// valida href
switch(retorne_href_get()){

case $idioma[19]:
return true;
break;




};

// valida href atual
if(retorne_href_get() == null and retorne_idproduto_get() == null){
	// modo produtos
	return true;
}else{
	// modo nao produtos
	return false;
};

};

?>