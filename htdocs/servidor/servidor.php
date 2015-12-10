<?php

// define o timezone
date_default_timezone_set("America/Sao_Paulo");

// dados do servidor
define("URL_SERVIDOR", "http://".$_SERVER['SERVER_NAME']);
define("PASTA_ROOT_SERVIDOR", $_SERVER['DOCUMENT_ROOT']);
define("IDENTIFICADOR_SESSAO_IDIOMA", md5("identificador_sessao_idioma"));

// idiomas disponiveis
$idioma_disponivel[0] = "pt_br";
$idioma_disponivel[1] = "us_ingles";

// href idioma
$seletor_idioma_href = "href_idioma";

// inicia a sessao
session_start();

// configuracoes de instalacao
include_once("configuracoes_instalacao.php");

// campos requestes
$requeste[0] = "href";
$requeste[1] = "pesq";
$requeste[2] = "uid";
$requeste[3] = "cat";
$requeste[4] = "idproduto";
$requeste[5] = "tipo_pagina_acao";
$requeste[6] = "idimagem";

// pasta nucleo do site
define("PASTA_NUCLEO_SITE_HOST", URL_SERVIDOR."/nucleo_site/");
define("PASTA_NUCLEO_SITE_ROOT", PASTA_ROOT_SERVIDOR."/nucleo_site/");

// pastas e localizacoes
define("PASTA_COMPILADOS_HOST", PASTA_NUCLEO_SITE_HOST."compilados/");
define("PASTA_COMPILADOS_ROOT", PASTA_NUCLEO_SITE_ROOT."compilados/");

// pasta de tema personalizado
define("TEMA_PERSONALIZADO", PASTA_NUCLEO_SITE_HOST."tema_personalizado/");

// pasta instalar root
define("PASTA_INSTALAR", PASTA_ROOT_SERVIDOR."/instalar/");

// pasta de plugins todos root
define("PASTA_PLUGINS", PASTA_INSTALAR."plugins/");

// pasta com o jquery host
define("PASTA_JQUERY", PASTA_NUCLEO_SITE_HOST."jquery/");

// pasta com plugins separados
define("PASTA_PLUGINS_CSS", PASTA_PLUGINS."/css/");
define("PASTA_PLUGINS_JAVASCRIPT", PASTA_PLUGINS."/javascript/");
define("PASTA_PLUGINS_PHP", PASTA_PLUGINS."/php/");

// pasta de imagens do sistema host
define("PASTA_IMAGENS_SISTEMA", PASTA_NUCLEO_SITE_HOST."imagens/");

// pasta de acoes host
define("PASTA_ACOES", PASTA_NUCLEO_SITE_HOST."acoes/");

// pasta de arquivos de usuarios root e host
define("PASTA_ARQUIVOS_USUARIOS_ROOT", PASTA_ROOT_SERVIDOR."/arquivos_usuarios/");
define("PASTA_ARQUIVOS_USUARIOS_HOST", URL_SERVIDOR."/arquivos_usuarios/");

// pasta de servidor root
define("PASTA_SERVIDOR_ROOT", PASTA_ROOT_SERVIDOR."/servidor/");

// pasta de plugins php que manipulam arquivos root
define("PASTA_PLUGINS_PHP_ARQUIVOS", PASTA_PLUGINS."/php/plugins_arquivos/");

// pasta de sons de sistema
define("PASTA_SONS_SISTEMA", PASTA_NUCLEO_SITE_HOST."sons/");

// pasta de recursos
define("PASTA_RECURSOS", PASTA_NUCLEO_SITE_HOST."recursos/");

// arquivos de sistema root
define("ARQUIVO_PHP", PASTA_COMPILADOS_ROOT."php.php");
define("ARQUIVO_CSS", PASTA_COMPILADOS_ROOT."tema.css");
define("ARQUIVO_JS", PASTA_COMPILADOS_ROOT."javascript.js");

// arquivos de sistema servidor
define("ARQUIVO_JS_HOST", PASTA_COMPILADOS_HOST."javascript.js");
define("ARQUIVO_CSS_HOST", PASTA_COMPILADOS_HOST."tema.css");
define("ARQUIVO_JQUERY", PASTA_JQUERY."jquery-2.1.3.min.js");
define("ARQUIVO_JQUERY_PAGINACAO", PASTA_JQUERY."jquery_paginacao.js");
define("ARQUIVO_CSS_RESOLUCAO", PASTA_COMPILADOS_HOST."resolucao.css");
define("ARQUIVO_JQUERY_FORMULARIO", PASTA_JQUERY."jquery.form.js");
define("ARQUIVO_CSS_TEMA_PERSONALIZADO", TEMA_PERSONALIZADO."tema_personalizado.css");

// extensoes
define("EXTENSAO_1", ".php");
define("EXTENSAO_2", ".js");
define("EXTENSAO_3", ".css");
define("EXTENSAO_4", ".txt");
define("EXTENSAO_5", ".png");
define("EXTENSAO_6", ".jpg");

// tipos de paginas
define("PAGINA_ID1", 1); // cadastro
define("PAGINA_ID2", 2); // login
define("PAGINA_ID3", 3); // publicar produto
define("PAGINA_ID4", 4); // carrega os produtos
define("PAGINA_ID5", 5); // salva o perfil
define("PAGINA_ID6", 6); // salva o idioma do usuario
define("PAGINA_ID7", 7); // seguir usuario
define("PAGINA_ID8", 8); // carrega seguidores
define("PAGINA_ID9", 9); // tipo pagina de feeds
define("PAGINA_ID10", 10); // notifica feeds
define("PAGINA_ID11", 11); // atualiza a conexao do usuario
define("PAGINA_ID12", 12); // carrega usuarios chat
define("PAGINA_ID13", 13); // muda o id de usuario de chat
define("PAGINA_ID14", 14); // envia a mensagem para o usuario
define("PAGINA_ID15", 15); // carrega as mensagens do chat
define("PAGINA_ID16", 16); // limpa as mensagens de chat
define("PAGINA_ID17", 17); // estado da lixeira
define("PAGINA_ID18", 18); // notificacao de novas mensagens de chat
define("PAGINA_ID19", 19); // verifica se ha nova mensagem em usuario de chat
define("PAGINA_ID20", 20); // seta se o usuario do chat esta online
define("PAGINA_ID21", 21); // comprar produto
define("PAGINA_ID22", 22); // carrega relatorio de vendas
define("PAGINA_ID23", 23); // conclui a venda do produto
define("PAGINA_ID24", 24); // cancela a compra
define("PAGINA_ID25", 25); // confirma o pagamento do produto
define("PAGINA_ID26", 26); // avalia perfil de usuario
define("PAGINA_ID27", 27); // excluir produto
define("PAGINA_ID28", 28); // detecta resolucao de pagina
define("PAGINA_ID29", 29); // carrega o numero de mensagens do chat atual
define("PAGINA_ID30", 30); // minimiza chat de usuario
define("PAGINA_ID31", 31); // minimiza o chat do usuario via timer
define("PAGINA_ID32", 32); // retorna o numero de usuarios online
define("PAGINA_ID33", 33); // recortar imagem de perfil de usuario
define("PAGINA_ID34", 34); // upload somente de imagem de perfil
define("PAGINA_ID35", 35); // atualiza cadastro de produto
define("PAGINA_ID36", 36); // exclui imagem de produto
define("PAGINA_ID37", 37); // recupera a senha do usuario
define("PAGINA_ID38", 38); // exclui conta de usuario
define("PAGINA_ID39", 39);
define("PAGINA_ID40", 40);

// paginas do site
define("PAGINA_INICIAL", URL_SERVIDOR."/index.php");
define("PAGINA_ACOES", PASTA_ACOES."index.php");

// configuracoes de perfil
define("TAMANHO_MINIMO_SENHA", 8);
define("COOKIES_DIAS_EXISTE", 30);
define("IDADE_MINIMA_CADASTRO", 16);
define("TAMANHO_ESCALA_IMG_PERFIL", 384);
define("TAMANHO_ESCALA_IMG_PERFIL_MINIATURA", 48);
define("TAMANHO_MAXIMO_CARACTERES_SOBRE_PERFIL_EXIBIR", 800);
define("TAMANHO_MAXIMO_NOME_USUARIO_CARACTERES", 50);
define("ESCALA_IMAGEM_ALBUM", 1024);
define("ESCALA_IMAGEM_ALBUM_MINIATURA", 512);
define("TAMANHO_IMG_PERFIL_RECORTAR_LARGURA", 512);
define("TAMANHO_IMG_PERFIL_RECORTAR_ALTURA", 640);
define("TAMANHO_IMG_PERFIL_RECORTAR_LARGURA_MIN", 192);
define("TAMANHO_IMG_PERFIL_RECORTAR_ALTURA_MIN", 256);

// configuracoes do sistema
define("CONFIG_NOME_COOKIE_EMAIL" , md5("cookie_email"));
define("CONFIG_NOME_COOKIE_SENHA" , md5("cookie_senha"));
define("CONFIG_TAMANHO_TITULO_PRODUTO", 150);
define("CONFIG_NUM_IMAGENS_PRODUTO_BASICO", 1);
define("CONFIG_LIMIT_PESQUISA", 1);
define("CONFIG_TIMER", 2000);
define("CONFIG_TIMER_LONGO", 15000);
define("TEMPO_FICAR_OFFLINE", 30);
define("CONFIG_SESSAO_IDUSUARIO_CHAT", md5("CONFIG_SESSAO_IDUSUARIO_CHAT"));
define("CONFIG_LIMIT_CHAT", 1);
define("CONFIG_LIMIT_CHAT_MENSAGENS", 20);
define("TAMANHO_RESOLUCAO_PADRAO", 800);
define("DETECTOR_SESSAO_TAMANHO_RESOLUCAO", md5("DETECTOR_SESSAO_TAMANHO_RESOLUCAO"));
define("USAR_RESOLUCAO_SISTEMA", md5("USAR_RESOLUCAO_SISTEMA"));
define("CONFIG_TAMANHO_MAXIMO_AVALIAR_PERFIL", 100);
define("CONFIG_HABILITA_SOCIAL", false);
define("CONFIG_PERMITIR_MOBILE", true);
define("CONFIG_SESSAO_MINIMIZAR_CHAT", md5("config_sessao_minimizar_chat"));
define("CONFIG_PERMITE_MAPA", false);
define("CONFIG_PERMITE_CADASTRO", true);
define("CONFIG_PERMITE_CHAT_RESOLUCAO", true);

// seletor de idiomas
include_once("seletor_idioma.php");

// paginas href
$pagina_href[0] = URL_SERVIDOR."?$requeste[0]=$idioma[3]";
$pagina_href[1] = URL_SERVIDOR."?$requeste[0]=$idioma[14]";
$pagina_href[2] = URL_SERVIDOR."?$requeste[0]=$idioma[15]";
$pagina_href[3] = URL_SERVIDOR."?$requeste[0]=$idioma[17]";
$pagina_href[4] = URL_SERVIDOR."?$requeste[0]=$idioma[19]";
$pagina_href[5] = URL_SERVIDOR."?$requeste[0]=$idioma[21]";
$pagina_href[6] = URL_SERVIDOR."?$requeste[4]=";
$pagina_href[7] = URL_SERVIDOR."?$requeste[0]=$idioma[48]";
$pagina_href[8] = URL_SERVIDOR."?$requeste[2]=";
$pagina_href[9] = URL_SERVIDOR."?$requeste[3]=";
$pagina_href[10] = URL_SERVIDOR."?$requeste[0]=$idioma[76]";
$pagina_href[11] = URL_SERVIDOR."?$requeste[0]=$idioma[77]";
$pagina_href[12] = URL_SERVIDOR."?$requeste[0]=$idioma[78]";
$pagina_href[13] = URL_SERVIDOR."?$requeste[0]=$idioma[80]";
$pagina_href[14] = URL_SERVIDOR."?$requeste[0]=$idioma[81]";
$pagina_href[15] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[16] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[17] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[18] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[19] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[20] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[21] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[22] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[23] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[24] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[25] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[26] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[27] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[28] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[29] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[30] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[31] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[32] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[33] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[34] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[35] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[36] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[37] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[38] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[39] = URL_SERVIDOR."?$requeste[0]=xx";
$pagina_href[40] = URL_SERVIDOR."?$requeste[0]=xx";

// categorias de produtos
include_once("categorias_produtos.php");

?>