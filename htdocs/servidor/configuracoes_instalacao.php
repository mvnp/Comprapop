<?php

// mysql do servidor
define("SERVIDOR_MYSQL", "localhost");
define("USUARIO_MYSQL", "root");
define("SENHA_MYSQL", "");
define("BANCO_DADOS", "bd_loja");

// logotipo
define("NOME_SISTEMA", "Comprapop");
define("DESENVOLVEDOR_SISTEMA", "Taimber.com<br>Fone: +55 62 9522-8342");
define("DESENVOLVEDOR_SISTEMA_AUTOR", "Taimber software ® - taimber.com - CEO: Salomão F.Silva Cel: +55 62 9522-8342");
define("VERSAO_PRODUTO_SISTEMA", "1.0 Beta");
define("LOCALIZACAO", "Endereço da empresa...");

// tabelas
define("TABELA_CATEGORIAS", "tb_categoria");
define("TABELA_CADASTRO", "tb_cadastro");
define("TABELA_PERFIL", "tb_perfil");
define("TABELA_PRODUTO", "tb_produto");
define("TABELA_IMAGENS_ALBUM", "tb_imagens_album");
define("TABELA_IDIOMA_USUARIO", "tb_idioma_usuario");
define("TABELA_SEGUIDORES", "tb_seguidores");
define("TABELA_NOTIFICA_FEEDS", "tb_notifica_feeds");
define("TABELA_CONEXAO_USUARIO", "tb_conexao_usuario");
define("TABELA_CHAT_USUARIO", "tb_chat_usuario");
define("TABELA_AMIZADE", "tb_amizade");
define("TABELA_VENDAS", "tb_vendas");
define("TABELA_AVALIAR_PERFIL", "tb_avaliar_perfil");

// tabelas disponiveis
$tabelas_disponiveis[] = TABELA_CATEGORIAS;
$tabelas_disponiveis[] = TABELA_CADASTRO;
$tabelas_disponiveis[] = TABELA_PERFIL;
$tabelas_disponiveis[] = TABELA_PRODUTO;
$tabelas_disponiveis[] = TABELA_IMAGENS_ALBUM;
$tabelas_disponiveis[] = TABELA_IDIOMA_USUARIO;
$tabelas_disponiveis[] = TABELA_SEGUIDORES;
$tabelas_disponiveis[] = TABELA_NOTIFICA_FEEDS;
$tabelas_disponiveis[] = TABELA_CONEXAO_USUARIO;
$tabelas_disponiveis[] = TABELA_CHAT_USUARIO;
$tabelas_disponiveis[] = TABELA_AMIZADE;
$tabelas_disponiveis[] = TABELA_VENDAS;
$tabelas_disponiveis[] = TABELA_AVALIAR_PERFIL;

?>