<?php



	

function getAllProducts() {	
	global $conn;
	$sql="SELECT * FROM product ORDER BY product_id DESC" ;
	$result = mysqli_query($conn,$sql);
	$products = Array();
        if(mysqli_num_rows($result)>0){

	    while($row = mysqli_fetch_assoc($result)){
		    array_push($products,$row);
	    }
    } 
        if($products){
        return $products;
 }
 
}





	function getProductByID($id)
	{		 
		
		global $conn;
		$sql="SELECT * FROM product WHERE product_id = $id" ;
		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){

			while($product = mysqli_fetch_assoc($result)){
				if($product){
					return $product;
				}
				
			}

		} 
	}


 function addProduct($product_arr)
			{
				global $conn;

			
				extract($product_arr);
			
				
					if(!isset($image) || empty($image)){
						$sql =  "INSERT INTO product(product_name, description, price, stock) 
						VALUES('$product_name', '$description', '$price', '$stock')";

				    } else {
									
						$sql =  "INSERT INTO product(product_name, description, price, stock, image) 
						VALUES('$product_name', '$description', '$price', '$stock', '$image')";
									
					}
					
					mysqli_query($conn,$sql);
					if(mysqli_affected_rows($conn) > 0)
						{       
							return true;	
						} else {
							return false;
						}

									  				
						
			}



function editProduct($product_arr){

	global $conn;
	extract($product_arr);
	   
	
				if(!isset($image) || empty($image)){
					
						$sql = "UPDATE product
								SET product_name = '$product_name',
									description = '$description',
									price = '$price',
								WHERE  product_id = '$product_id'";
					
				} else {
					
						$sql = "UPDATE product
								SET product_name= '$product_name',
									description = '$description',
									price = '$price',
									stock = '$stock',
									image = '$image'
								WHERE  product_id = '$product_id'";
																
												  
							
					} 
					
					mysqli_query($conn,$sql);		
									
			}


		
  function deleteProduct($product_id){
	global $conn;
					$sql = "DELETE FROM  product WHERE  product_id = $product_id";							
					$result = mysqli_query($conn,$sql);						  
							
				if(mysqli_affected_rows($conn) > 0)
				{       
					return true;	
				} else {
					return false;
				}

			
	}




	