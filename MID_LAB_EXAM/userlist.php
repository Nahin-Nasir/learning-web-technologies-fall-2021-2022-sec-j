<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>User List</title>
</head>

<body>
	<br>

	<table border="1" align="center">
		<tr>
			<th>Serial</th>
			<th>NAME</th>
			<th>PASSWORD</th>
			<th>USER ID</th>
			<th>USER TYPE</th>
		</tr>
		<?php
		$myfile = fopen('user.txt', 'r');
		$counter = 0;

		while (!feof($myfile)) {
			$data = fgets($myfile);
			if($data!=""){
				$user = explode('|', $data);
	
				echo '<tr>
					<td>' . ++$counter . '</td>
					<td>' . $user[0] . '</td>
					<td>' . $user[1] . '</td>
					<td>' . $user[2] . '</td>
					<td>' . $user[3] . '</td>
				</tr>';
			}
		}
		fclose($myfile);
		?>
	<td><a href="adminhome.html">Home </a> <br></td>
	</table>
</body>

</html>