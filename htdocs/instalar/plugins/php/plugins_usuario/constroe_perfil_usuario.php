<?php

// constroe o perfil de usuario
function constroe_perfil_usuario($modo){

// globals
global $idioma;
global $requeste;
global $pagina_href;

// url de pagina inicial
$url_pagina_inicial = PAGINA_INICIAL;

// id de usuario dono de produto
$idusuario_dono_produto = retorne_idusuario_dono_produto(retorne_idproduto_get());

// id de usuario
$idusuario = retorne_idusuario_visualizando();

// seta novo id de usuario dono de produto
if($idusuario == null){

// idusuario
$idusuario = $idusuario_dono_produto;

};

// valida idusuario
if($idusuario == null){

// retorno nulo
return null;

};

// dados do usuario
$dados = dados_perfil_usuario($idusuario);

// separa os dados
$imagem_perfil = $dados['imagem_perfil'];
$imagem_perfil_miniatura = $dados['imagem_perfil_miniatura'];
$nome = $dados['nome'];
$email = $dados['email'];
$cnpj = $dados['cnpj'];
$endereco = $dados['endereco'];
$cidade = $dados['cidade'];
$estado = $dados['estado'];
$telefone = $dados['telefone'];
$celular = $dados['celular'];
$site = converte_urls_texto_links($dados['site']);
$categoria = $dados['categoria'];
$sobre = converte_urls_texto_links($dados['sobre']);
$cep = $dados['cep'];

// url da loja do usuario
$url_loja_usuario = $pagina_href[4]."&".$requeste[2]."=".$idusuario;

// campo mapa
$campo_mapa = constroe_mapa($cidade, $estado);

// categoria
$categoria = "<a href='$url_pagina_inicial?$requeste[3]=$categoria' title='$categoria'>$categoria</a>";

// campo seguir
$campo_seguir = campo_seguir_usuario($idusuario);

// campo imagem de perfil
$campo_imagem_perfil = "
<div class='classe_div_imagem_perfil'>
<a href='$url_loja_usuario' title='$nome'>
<img src='$imagem_perfil' title='$nome'>
</a>
</div>
";

// campo nome de usuario
$campo_nome_usuario = "
<div class='classe_div_nome_usuario_perfil'>$nome</div>
";

// campo avalia perfil de usuario
$campo_avalia_perfil = campo_avaliar_perfil_usuario();

// codigo html
$codigo_html[0] = "
<div class='classe_div_perfil_usuario'>
$campo_imagem_perfil
$campo_avalia_perfil
$campo_seguir
</div>
";

// codigo html
$codigo_html[1] = "

<div class='classe_div_informacoes_perfil_usuario'>
$campo_nome_usuario
<span class='classe_div_informacoes_perfil_usuario_span'>$idioma[59]: $sobre</span>
<span class='classe_div_informacoes_perfil_usuario_span'>$idioma[51]: $cnpj</span>
<span class='classe_div_informacoes_perfil_usuario_span'>$idioma[52]: $endereco</span>
<span class='classe_div_informacoes_perfil_usuario_span'>$idioma[53]: $cidade - $idioma[54]: $estado - $idioma[60]: $cep</span>
$campo_mapa
<span class='classe_div_informacoes_perfil_usuario_span'>$idioma[50]: $email</span>
<span class='classe_div_informacoes_perfil_usuario_span'>$idioma[55]: $telefone - $idioma[56]: $celular - $idioma[57]: $site</span>
<span class='classe_div_informacoes_perfil_usuario_span'>$idioma[58]: $categoria</span>
</div>
";

// retorno
switch($modo){

case 1:
return $codigo_html[0];
break;

case 2:
return $codigo_html[1];
break;

};

};

?>