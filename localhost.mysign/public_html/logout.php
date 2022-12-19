<?php

if(!empty($_COOKIE)){
	setcookie('login', $_COOKIE['login'], time()-10, '/');
	setcookie('password', $_COOKIE['password'], time()-10, '/');
	header("location: http://localhost.mysign/index.php?uid=$uid");
}