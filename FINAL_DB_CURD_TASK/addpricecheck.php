<?php
	session_start();
	require_once('productmodel.php');

	if(isset($_POST['submit'])){

		$productname = $_POST['productname'];
		$bprice	= $_POST['bprice'];
		$sprice	= $_POST['sprice'];

		if($_POST['productname'] != ""){
			if($_POST['bprice'] != ""){
				if($_POST['sprice'] != ""){
					
					$product = [
								'productname'=> $productname, 
								'bprice'=>$bprice, 
								'sprice'=> $sprice, 
								
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