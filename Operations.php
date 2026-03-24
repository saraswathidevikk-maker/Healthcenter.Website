<?php include 'db_connect.php';

$query = "SELECT * FROM employees";
$result = $CONNECTION->query($query);
if(!$result)
    {
     die("database query failed: " . $CONNECTION->error);
    }
while($row = $result->fetch_assoc())
    {
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Phone: " . $row["number"] . "<br>";  
        echo "age: " . $row["age"] . "<br><br>";
    } 

$CONNECTION->close(); 
$insert_query = "INSERT INTO employees (id,name, email, PhoneNumber, age) VALUES (8,'Karthik', 'karthik@gmail.com', '1234567890', 24)";
$resultinsert = $CONNECTION->query($insert_query);
if($resultinsert === TRUE){
    echo "New record created successfully";
}
else{

    echo "Error: " . $insert_query . "<br>" . $CONNECTION->error;
} 
 $update_query = "UPDATE employees SET name='Karthik SR' WHERE id=8";
$resultupdate = $CONNECTION->query($update_query);
if($resultupdate === TRUE){
    echo "Record updated successfully"."<br>";
}
else{
    echo "Error updating record: " . $CONNECTION->error;
}
$Delete_query = "DELETE FROM employees WHERE id=8";
$resultdelete = $CONNECTION->query($Delete_query);
if($resultdelete === TRUE){
    echo "Record deleted successfully";
}
else{
    echo "Error deleting record: " . $CONNECTION->error;
} 

?>