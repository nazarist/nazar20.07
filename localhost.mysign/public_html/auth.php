<?php

function checkUserPassword($login, $password){
	require __DIR__ . '/database.php';

	foreach($data as $dat){
		if($dat['login'] === $login && $dat['password'] === $password){
			return true;
		}
	}
	return false;
}

function checkCookies(){
	$coockiesLogin = $_COOKIE['login'] ?? '';
	$coockiesPassword = $_COOKIE['password'] ?? '';

	if(checkUserPassword($coockiesLogin, $coockiesPassword)){
		return $coockiesLogin;
	}
	return null;
}