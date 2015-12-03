<?php
	ob_start();
	session_start();
	include('populateObjects.php');
	include('db.class.php');
	include('funcoes.inc.php');	
				// Banco  | sevidor   | usuario | senha
	$DB = new DB('u358413504_bd', '127.0.0.1', 'u358413504_user', 'Eisa2015' );
	
	
	define(SITENOME, 'nocoffeenowork');
	define(DOMINIO, 'nocoffeenowork');
	define(BASE, 		'/');
	define(EMAILPRINCIPAL, 'juniorug@gmail.com');
	date_default_timezone_set('America/Bahia');
    $siteUrl = "http://nocoffeenowork.esy.es/";

	//url amigavel:         
	//$url = explode('/', substr($_SERVER['REQUEST_URI'], strpos('/',$_SERVER['REQUEST_URI'] )+1,strlen($_SERVER['REQUEST_URI'])));
	
	
	# Vari�vel urlSite
    $url = $_SERVER['REQUEST_URI'];
	if (strpos($url,'?')) $url = substr($url,0,strpos($url,'?'));
	$url = substr($url,strlen(BASE),strlen($url));
	$url = explode('/',$url);
	foreach ($url as $a=>$b) $url[$a] = trim(str_replace(" ","",alfanumerico($b,"-.,_")));
	
	if(!empty($url['0'])){
		$pieces = explode("?", $url['0']);
	}
	/*require 'SQL_to_PHP.class.php';
	$MySQL_to_PHP = new MySQL_to_PHP('127.0.0.1', 'u358413504_user', 'Eisa2015', 'u358413504_bd');
	$MySQL_to_PHP->CreateClassesFiles();*/
	
?>
