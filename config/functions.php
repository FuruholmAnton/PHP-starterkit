<?php 

Class Router {
	
	protected $paths = [];

 	public function path($path) {
		$this->paths[] = $path;
	}

	public function getPath() {

		$_PATH = (object) array();
	
		if(isset($_GET["path"])) {

			foreach ($this->paths as $key => $path) {

			    if( $_GET["path"] === $path->url ){
			        $_PATH->page = $path->page;
			        $_PATH->layout = $path->layout;
			        break;

			    } else if ($_GET["path"] === "/") {
			    	$_PATH->page = "home";

			    } else{
			        $_PATH->page = "404";
			    }
		    }

		} else {
		    $_PATH->page = "home";
		}

		return $_PATH;
		
	}  
}

$ROUTER = new Router();

