



<?php
error_reporting(E_ALL); ini_set('display_errors', '1');
$host = 'localhost'; 
	$user = 'test_user2';      
	$pass = 'password2';         
	$name = 'churky';      
	
	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");

	$id = $_GET['id'];
	$query = "SELECT FROM users2 WHERE id=$id";
	$result= mysqli_query($link, $query) or die(mysqli_error($link));
	$user2 = mysqli_fetch_assoc($result);

	?>
<div>
	<h1><?= $user2['name'] ?></h1>
	<p>
		age: <span class="age"><?= $user2['age'] ?></span>,
		salary: <span class="salary"><?= $user2['salary'] ?></span>
	</p>
</div>