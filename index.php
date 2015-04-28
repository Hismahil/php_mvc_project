<?php
	
	//mostrar erros no navegador
	error_reporting( E_ALL );
	ini_set( "display_errors", 1 );

	include_once "views/layouts/main_layout.php";
	include_once "config/routes.php";
	
	$routes = new Routes();

	//start variables
	$controller = $action = $id = "";

	//set $_GET context to variables
	if(isset($_GET['controller']))
		$controller = $_GET['controller'];

	if(isset($_GET['action']))
		$action = $_GET['action'];

	if(isset($_GET['id']))
		$id = $_GET['id'];

	//manager layout
	$layout = new MainLayout();
	//set render to content body
	$layout->content = $routes->render($controller, $action, $id);
	//render
	echo $layout->getLayout();
?>