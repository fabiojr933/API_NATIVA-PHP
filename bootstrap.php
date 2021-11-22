<?php

/**
 * Mostrando os erros para o usuario
 * Usado para teste
 * não pode ir em producão
 */
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ERROR);


/**
 * Configuração do banco de dados
 */
define('HOST', 'localhost');
define('BANCO', 'api');
define('USUARIO', 'root');
define('SENHA', '');

/**
 * Configuração do autoload, url
 */
define('DS', DIRECTORY_SEPARATOR);
define('DIR_APP', __DIR__);
define('DIR_PROJETO', 'api');

if (file_exists('autoload.php')) {
    include 'autoload.php';
} else {
    die('Falha ao carregar autoload!');
}
