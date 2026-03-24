<?php 

$CONNECTION = new mysqli("Localhost","root","Chinnu@4","employee");
if($CONNECTION->connect_error) {
    die("Connection Failed: " . $CONNECTION->connect_error);
}
/* else{
    echo "Connection Successful". "<br><br>";
} */ 



?>