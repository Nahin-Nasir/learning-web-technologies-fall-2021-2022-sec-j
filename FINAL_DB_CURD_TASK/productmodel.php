<?php 
	require_once('db.php');



	function addproduct($product){
		$con = getConnection();
		$sql= "insert into products values('','{$product['productname']}', '{$product['bprice']}', '{$product['sprice']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	

?>