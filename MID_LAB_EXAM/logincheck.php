<?php
	session_start();

	if(isset($_POST['submit'])){
		$userid = $_POST['userid'];
		$password = $_POST['password'];
		

		if($userid != "" && $password != ""){
				$myfile = fopen('user.txt', 'r');

				while (!feof($myfile)) {
					$data = fgets($myfile);
					$user = explode('|', $data);
					if(trim($user[2]) == $userid && trim($user[1]) == $password){
						if (trim($user[3]) == 'User'){
							setcookie('flag', 'true', time()+3600, '/');
						    header('location: userhome.html');
						}
						else if (trim($user[3]) == 'Admin'){
							setcookie('flag', 'true', time()+3600, '/');
						    header('location: adminhome.html');
						}
					}
					else echo "invalid usertype/password";
				}
			}
		}else{
			echo "Invalid userid/password...";
		}
	
?>