<?php

namespace App;
require '../app/Autoloader.php';

Autoloader::register();

if (isset($_GET['p'])) {
	
	$p = $_GET['p'];

}else{
	$p = 'home';
}


ob_start();

if($p === 'home'){

	require '../pages/home.php';
}elseif ($p === 'single') {
	require '../pages/single.php';
}

else{
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
	require '../pages/404.php';
}

$content = ob_get_clean();
require '../pages/template/default.php';