<?php
$id = $_GET['id'];
if (rename('user.txt', 'newuser.txt') != 1) 
{
	echo 'Error ';
	return;
}
$mynewuserfile = fopen('newuser.txt', 'r');
$myfile = fopen('user.txt', 'w');
$counter = 0;

while (!feof($mynewuserfile)) {
	$data = fgets($mynewuserfile);
	if ($data != "") 

	{
		$user = explode('|', $data);

		if (++$counter != $id) {
			$userData = $user[0] . '|' . $user[1] . '|' . $user[2];
			fwrite($myfile, $userData);
		}
	}
}


fclose($myfile);
fclose($mynewuserfile);
$mynewuserfile = fopen('newuser.txt','w');
fwrite($mynewuserfile,"");
fclose($mynewuserfile);
?>