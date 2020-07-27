<?php
//error_reporting(0);
  

$has_error = false;

if(isset($_POST['login'])) {
	
	if(empty($_POST['email'])) {
				$error_email = "Please enter email";
				$has_error = true;
				}
				
				else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$error_email = "Please enter valid email";
				$has_error = true;
			
					} else {
						$email = filterUserInput($_POST['email']);
					}
			

	if(empty($_POST['password'])) {
			$error_password= "Please enter password";
			$has_error = true;
		} else {
			$password = filterUserInput($_POST['password']);
		}


	if(!$has_error) {
		check_user();
	}

}


function check_user()
		{
			/* The global keyword is used to access a global variable from within a function. 
			  To do this, use the global keyword before can use these global variables inside the function */

			global $conn, $email, $password, $error_email;
			
			# We build a SQL Select query;
			$sql =  "SELECT * FROM users where email='$email' and password=sha1('$password')";
			
			# mysqli_query() function performs a query against the database
			$result = mysqli_query($conn, $sql);
	
			 # mysqli_num_rows() function returns the number of rows in the result set.
			if(mysqli_num_rows($result) > 0){
					
				  /*  
				  	  mysqli_fetch_assoc() function returns an associative array of strings 
                      representing the fetched row in the result set, 
					  where each key in the array represents the name of one of the result set's columns 
				  */ 
                  
				$user_record  = mysqli_fetch_assoc($result);
                  
				  # Here we create 2 Session variables with the PHP global variable: $_SESSION
				  $_SESSION['user_record'] = $user_record; 
				//   $_SESSION['email'] = $user_record['email']; 
                  
				  # Finally we use header() function to redirect user to member_area 
			      header("Location: member_area.php");
				
				} else {
					# If no record found we show the error.
					$error_email = "Invalid email or password!!";
				}
	
}
		


?>