<?php
//error_reporting(0);



$has_error = false;


if(isset($_POST['register'])) {
    
    if(empty($_POST['username'])) {
                $error_username = "Please enter Username";
                $has_error = true;
                
                } else {
                    $username = filterUserInput($_POST['username']);
                }
                

    if(empty($_POST['email'])) {
                $error_email = "Please enter email";
                $has_error = true;
                }
                
                else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $error_email = "Please enter valid email";
                $has_error = true;
                
                    } else {
                        $email = filterUserInput($_POST['email']);
                    }
        


        if(!empty($_POST["password"]) && ($_POST["password"] == $_POST ["password2"])) {
              $password = filterUserInput($_POST['password']);
              $password2 = filterUserInput($_POST['password2']);
              $has_error = false;
                
          } elseif(!empty($_POST["password"])){
              $error_password2 = 'Passwords Do Not Match!';
              $has_error = true;
          } else {
              $error_password = 'Please Enter a Password';
              $has_error = true;
             }
    
    # If no error was found we call insert_into_db function.... and you know what it does!
    
	if(!$has_error){
        insert_into_db();
    }
    
} # End of POST


# Our custom function to insert the new record into database;
function insert_into_db()
		{
            /* The global keyword is used to access a global variable from within a function. 
			  To do this, use the global keyword before can use these global variables inside the function */
            global $conn, $username, $password, $email, $error_email;
			
            # We build a SQL Select query;
            $sql=  "SELECT * FROM users where email='$email'";
            
            # mysqli_query()  function performs a query against the database
			$result = mysqli_query($conn, $sql);
    
            # Here we need to check if user already exists for the given  email / password combination. 
			if(mysqli_num_rows($result) > 0){  
               $error_email = "Sorry This email already exists!";
            
            } else { # If no such user already exists then we insert new user data to users table.
				
                
                # We build a SQL Insert query;
				$sql=  "INSERT INTO users (username ,email, password)
				values ('$username', '$email' ,sha1('$password'))";
                
                # mysqli_query()  function performs a query against the database
        $result = mysqli_query($conn, $sql);
        header("Location:login.php");
                
                
                
                    
				    
			
            
		
        } # End of else
  
   } # End of insert_into_db function 

?>

