<?php

include_once "././helpers/page_helper.php";

class MainLayout {

	public $title = "PHP MVC Project Example";
	public $content = "";
	public $css = "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'/>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css'>";
	public $js = "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script src='http://code.jquery.com/ui/1.10.3/jquery-ui.js'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>";
	public $embeddedStyle = "";
	const IMG = "assets/img";
	public $nav;

	public function addCSS($href){
		$this->css .= "<link href='$href' rel='stylesheet' />";
	}

	public function addJS($href){
		$this->js .= "<script src='$href'></script>";
	}

	public function getLayout(){
		$this->nav = include_once "_navigation.php";

		return
		"<!DOCTYPE html>
		<html lang='en'>
			<head>
				<meta charset='utf-8'>
				<meta http-equiv='X-UA-Compatible' content='IE=edge'>
				<meta name='viewport' content='width=device-width, initial-scale=1'>
				<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
				<title>$this->title</title>

				<!-- Bootstrap -->
				$this->css
				$this->js
				<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
				<!--[if lt IE 9]>
						<script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
						<script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
				<![endif]-->
			</head>
			<body>
				$this->nav

				<div class='container'>
					$this->content
				</div>
				
			</body>
		</html>";	
	}
	
}

?>