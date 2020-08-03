<?php


# Do all of your basic & common configuration  here



# Database connection setup.

$serverName='localhost';
$userName='root';
$password='';
$dbName='cms_rigz';


$conn = mysqli_connect($serverName, $userName, $password,$dbName);

 //var_dump($conn);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



# For default timezone setup
date_default_timezone_set('UTC');

# Lets start session
/* We now start a new session with session_start() function. 
A session is a way to store information (in variables) to be used across multiple pages.
By default, session variables last until the user closes the browser or log out / destroy session. */
session_start();





# Sanitising user input for all forms

function filterUserInput($data) {

    // trim() function will remove whitespace from the beginning and end of string.
    $data = trim($data);

    // Strip HTML and PHP tags from a string
    $data = strip_tags($data);

    /* The stripslashes() function removes backslashes added by the addslashes() function.
        Tip: This function can be used to clean up data retrieved from a database or from an HTML form.*/
    $data = stripslashes($data);

    // htmlspecialchars() function converts special characters to HTML entities. Say '&' (ampersand) becomes '&amp;'
    $data = htmlspecialchars($data);
    return $data;

} # End of filter_user_input function


?>
