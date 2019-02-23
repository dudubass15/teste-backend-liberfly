<?php

define('versao', 'dsv'); // Alterar para 'prd' quando for colocar em produção.

define('URL', 'http://localhost/teste-backend-liberfly'); // Sempre alterar quando iniciar novo projeto.

global $config;

	$config = array();

	if (versao == 'dsv') {
		$config['versao'] = 'dsv';
		$config['dbname'] = 'liberfly';
		$config['host']   = 'localhost';
		$config['user']   = '';
		$config['pass']   = '';
	} 

	if (versao == 'prd') {
		$config['versao'] = 'prd';
		$config['dbname'] = '';
		$config['host']   = '';
		$config['user']   = '';
		$config['pass']   = '';
	}

?>