<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['username'] != ""){
			if($_POST['password'] != "" && $_POST['password']==$_POST['confirmpassword']){
				if($_POST['userid'] != ""){
					if($_POST['usertype'] != ""){

					$myfile = fopen('user.txt', 'a');
					$user = $_POST['username']."|".$_POST['password']."|".$_POST['userid']. "|".$_POST['usertype']. "\r\n";

					fwrite($myfile, $user);
					fclose($myfile);

					echo $user;

					header('location: login.html');
				} else{
					echo"Invalid usertype";
				}

				}else{
					echo "Invalid UserID...";
				}	
			}else{
				echo "Invalid password check if both password are same ...";
			}
		}else{
			echo "Invalid username...";
		}

}
?>