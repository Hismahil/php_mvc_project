<?php

include_once "./controllers/examples_controller.php";

class Routes {

	/*
	*	Render view
	*/
	public function render($controller, $action, $id=0){
		return $this->controller($controller, $action, $id);
	}

	/*
	*	Find controller
	*/
	public function controller($controller, $action, $id=0){
		switch ($controller) {
			case 'examples': 
				$ex = new ExamplesController();
				return $this->action($ex, $action, $id);
				break;
			default: return "<h1>No Controller</h1>"; break;
		}
	}

	/*
	*	Find action
	*/
	public function action($controller, $action, $id=0){
		switch ($action) {
			case 'index': return $controller->index(); break;
			case 'show': return $controller->show($id); break;
			case 'edit': return $controller->edit($id); break;
			case 'new': return $controller->_new(); break;
			case 'create': return $controller->create(); break;
			case 'update': return $controller->update($id); break;
			case 'destroy': return $controller->destroy($id); break;
			default: return "<h1>No Action</h1>"; break;
		}
	}
}