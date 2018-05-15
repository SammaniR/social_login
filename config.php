<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("203307387242-cbtmla6fngvpauhum3m33hdc5da1efjj.apps.googleusercontent.com");
	$gClient->setClientSecret("cxPChbcssxfuIRXwKJuPVv08");
	$gClient->setApplicationName("CPI Login");
	$gClient->setRedirectUri("http://localhost/GoogleLogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
