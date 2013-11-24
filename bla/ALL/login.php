<?php
require 'core/init.php';
include 'includes/overall/header.php';

	if (empty($_POST) === false) {
		$username = sanitize($_POST['username']);
		$password = sanitize(md5($_POST['password']));

	if(empty($username) === true || empty($password) === true) {
			$errors[] = 'You need to enter a username and password.';
		} else if (user_exists($username) === false) {
			$errors[] = 'We can\'t find that username.';
		 } else if (user_active($username) === false) {
			$errors[] = 'You haven\'t activated your account!';
		} else {
			$login = login($username, $password);
			if ($login === false) {
				$errors[] = 'Username or password is incorrect.';
			} else {
				$_SESSION['user_id'] = $login;
				header('Location: index.php');
				exit();
			}
		}

		print_r($errors);
} 

include 'includes/overall/footer.php';
?>