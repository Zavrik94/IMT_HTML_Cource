<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
if (!isset($login) || empty($login)) {
	echo json_encode([
		'result' => false,
		'error' => 'Login Error'
	]);
	exit(0);
}
if (!isset($pass) || empty($pass)) {
	echo json_encode([
		'result' => false,
		'error' => 'Pass Error'
	]);
	exit(0);
}
echo json_encode([
	'result' => true,
	'login' => $login,
	'pass' => hash('whirlpool', $pass)
]);
