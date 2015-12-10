<?php

// campo construir editar o produto
function constroe_campo_editar_produto($dados){

// globals
global $idioma;

// separa dados
$id = $dados['id'];
$idusuario = $dados['idusuario'];
$idalbum = $dados['idalbum'];
$titulo = $dados['titulo'];
$descricao = $dados['descricao'];
$quantidade = $dados['quantidade'];
$parcelamento = $dados['parcelamento'];
$juros = $dados['juros'];
$preco = $dados['preco'];
$categoria = $dados['categoria'];
$data = $dados['data'];

// valida usuario dono do produto
if(retorne_usuario_dono_produto($id) == false){

// retorno nulo
return null;

};

// codigo html
$codigo_html = campo_publicar_produto($dados);

// retorno
return $codigo_html;

};

?>