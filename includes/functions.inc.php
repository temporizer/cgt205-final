<?php 

$links = ['about', 'portfolio', 'contact'];


function check_page($page) {
	$end = explode('/', $_SERVER['PHP_SELF']);
	$end = end($end);
	if ($end == ($page . ".php")) {
		return TRUE;
	} else {
		return FALSE;
	}
}

 ?>