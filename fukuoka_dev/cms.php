<?php
	$user = 'choinomi';
	$pass = 'fukuoka';
	if(isset($_SERVER['PHP_AUTH_USER']) && ($_SERVER["PHP_AUTH_USER"]==$user && $_SERVER["PHP_AUTH_PW"]==$pass)){
		echo "{$_SERVER['PHP_AUTH_USER']}";
		echo 'さんログイン中<br/>';
		echo '<br/>';
	} else {
		header('WWW-Authenticate: Basic realm=\"basic\"');
		header('HTTP/1.0 401 Unauthorized - basic');
		echo '<p>Unauthorized</p>';
		exit();
	}

    define('ROOT', '../');
    include_once(ROOT.'inc/header.php');
    include_once(ROOT.'controller/AppController.php');
    include_once('sheet.php');
    include_once(ROOT.'inc/cms.php');
    include_once('../inc/footer.php');
    