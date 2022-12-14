<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<p>текст для любого пользователя</p>
		<?php
			error_reporting(E_ALL); ini_set('display_errors', '1');
			session_start();
			if (!empty($_SESSION['auth'])) {
				echo 'текст только для авторизованного пользователя';
			}
		?>
		<p>текст для любого пользователя</p>
	</body>
</html>
