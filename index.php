<?php
	
	//mostrar erros no navegador
	error_reporting( E_ALL );
	ini_set( "display_errors", 1 );

	include_once "views/layouts/main_layout.php";
	include_once "helpers/page_helper.php";
	
	PageHelper::$content .= "<h1>Content</h1>";

	echo MainLayout::getLayout();
?>