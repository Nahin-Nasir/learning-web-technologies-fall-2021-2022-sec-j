<?php
	session_start();
	require_once('productmodel.php');

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$bprice	= $_POST['bprice'];
		$sprice	= $_POST['sprice'];

		if($_POST['name'] != ""){
			if($_POST['bprice'] != ""){
				if($_POST['sprice'] != ""){
					
					$product = [
								'name'=>$name, 
								'bprice'=>$bprice, 
								'sprice'=>$sprice, 
								
							];
							
					$status = addproduct($product);

					if($status){
						header('');
					}else{
						echo "try again...";
					}
					

				}else{
					echo "Invalid buying price ";
				}	
			}else{
				echo "Invalid selling price";
			}
		}else{
			echo "Invalid Product Name..";
		}
	}
?>