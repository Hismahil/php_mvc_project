<?php

class ExamplesController {
	
	public function index(){
		$page = include_once "./views/examples/index.php";
		return $page;
	}

	public function show($id){
		$page = include_once "./views/examples/show.php";
		return $page;
	}

	public function edit($id){
		$page = include_once "./views/examples/edit.php";
		return $page;	
	}

	public function _new(){
		$page = include_once "./views/examples/new.php";
		return $page;
	}

	public function create(){
		return "<h1>Create</h1>";
	}

	public function update($id){
		return "<h1>Update $id</h1>";
	}

	public function destroy($id){
		return "<h1>Destroy $id</h1>";
	}
}

?>