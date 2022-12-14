<?php
$host = 'localhost'; 
	$user = 'test_user2';      
	$pass = 'password2';         
	$name = 'churky';      
	
	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");

?>
<?php
	if (empty($_POST)) {
?>

<form action="" method="POST">
	<input name="login">
	<input name="password" type="password">
	<input type="submit">
</form>


<?php
	} else{



if (!empty($_POST['password']) and !empty($_POST['login'])) {
	$login = $_POST['login'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM userss WHERE login='$login' AND password='$password'"; 
	$result = mysqli_query($link, $query);
	$user2 = mysqli_fetch_assoc($result);
	
	if (!empty($user2)) {
		echo 'АВТОРИЗАЦИЯ ПРОЙДЕНА!';
	} else echo 'НЕВЕРНОЕ УКАЗАН ЛОГИН/ПАРОЛЬ';
	
}
	}
?>