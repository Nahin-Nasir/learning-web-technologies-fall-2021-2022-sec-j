<?php 
	require_once('db.php');



	function addproduct($product){
		$con = getConnection();
		$sql= "insert into products values('{$product['productname']}', '{$product['bprice']}', '{$product['sprice']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateProduct($product){

		$conn = getConnection();
		$sql = "update products set name=['{$product['name']}'], bprice=['{$product['bprice']}'], sprice=['{$product['sprice']}'], profit=['{$product['profit']}'],display=['{$product['display']}] where name = {$product['name']} ";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>