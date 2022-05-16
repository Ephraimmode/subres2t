<?php 





function classAutoLoader($class){

$class = strtolower($class);

$the_path = "includes/{$class}.php";

	if (is_file($the_path) && !class_exists($class)) {
		include $the_path;
	}
	else{
		die("The file named {$class}.php was not found!");
	}

}

spl_autoload_register('classAutoLoader');







function redirect($url){
	header("Location: $url");
}






?>