<?php

class PageHelper {

	public static $title = "PHP MVC Project Example";
	public static $content = "";
	public static $css = "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'/>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css'>";
	public static $js = "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script src='http://code.jquery.com/ui/1.10.3/jquery-ui.js'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>";
	public static $embeddedStyle = "";
	const IMG = "assets/img";

	public static function addCSS($href){
		self::$css .= "<link href='$href' rel='stylesheet' />";
	}

	public static function addJS($href){
		self::$js .= "<script src='$href'></script>";
	}
}

?>