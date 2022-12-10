<?php

$host = 'localhost'; 
	$user = 'test_user2';      
	$pass = 'password2';         
	$name = 'churky';      
	
	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");

	$del = $_GET['del'];
	$query = "DELETE FROM test WHERE id=$del";
	mysqli_query($link, $query) or die(mysqli_error($link));

	$query = "SELECT * FROM test";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); 
		$data[] = $row); ?>
	
		<?php foreach ($data as $elem){ ?>
			
			
			<table>
			<tr>  
				<th> id</th>
				<th> name</th>
				<th> age</th>
				<th> salary</th>
			</tr>
			<tr>  
				<td> <?php echo  $elem['id'] ?> </td> 
		
				<td> <?php echo  $elem['name'] ?> </td> 
			
				<td> <?php echo  $elem['age'] ?> </td>
					 				
				<td> <?php echo  $elem['salary']?> </td> 
				
		    </tr>
		
		
		</table>
		 <?php } ?>
