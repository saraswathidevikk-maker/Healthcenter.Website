<style>
.result-box {
    width: 400px;
    margin: 30px auto;
    padding: 20px;
    background: #c5dceb;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
.result-box input, .result-box textarea {
    width: 100%;
    padding: 8px;
    margin: 8px 0;
}
.btn {
    padding: 10px;
    background: black;
    color: white;
    border: none;
    cursor: pointer;
}
</style>


<?php include 'db_connect.php'; ?>
<?php 
if(isset($_POST['INSERT'])) {
    echo "INSERT button clicked";
    if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['email']) && isset($_POST['PhoneNumber']) && isset($_POST['address']) && isset($_POST['salary'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $number = $_POST['PhoneNumber'];
        $address = $_POST['address'];
        $salary=$_POST['salary'];

        $query = "INSERT INTO employees (id, name, age, email, PhoneNumber, address, salary) VALUES ('$id', '$name', '$age', '$email', '$number', '$address', '$salary')";
        if($CONNECTION->query($query) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record: " . $CONNECTION->error;
        }
    }
}
if(isset($_POST['DELETE'])) {
    echo "DELETE button clicked";
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $query = "DELETE FROM employees WHERE id='$id'";
        if($CONNECTION->query($query) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $CONNECTION->error;
        }
    }
}
if(isset($_POST['UPDATE'])) {
    echo "UPDATE button clicked";
    if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['email']) && isset($_POST['PhoneNumber']) && isset($_POST['address']) && isset($_POST['salary'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $number = $_POST['PhoneNumber'];
        $address = $_POST['address'];
        $salary=$_POST['salary'];

        $query = "UPDATE employees SET age='$age', email='$email', PhoneNumber='$number', address='$address', salary='$salary' WHERE id='$id'";
        if($CONNECTION->query($query) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $CONNECTION->error;
        }
    }
}
if(isset($_POST['SELECT'])) {
    echo "SELECT button clicked";
    $id = $_POST['id'];
    
    $query = "SELECT * FROM employees WHERE id='$id'";
    $result = $CONNECTION->query($query);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           echo '


<div class="result-box">
    <label>ID</label>
    <input type="text" value="'.$row["id"].'" readonly>

    <label>Name</label>
    <input type="text" value="'.$row["name"].'">

    <label>Age</label>
    <input type="text" value="'.$row["age"].'">

    <label>Email</label>
    <input type="text" value="'.$row["Email"].'">

    <label>Phone</label>
    <input type="text" value="'.$row["PhoneNumber"].'">

    <label>Address</label>
    <textarea>'.$row["Address"].'</textarea>

    <label>Salary</label>
    <input type="text" value="'.$row["salary"].'">

    <br>
    <button class="btn" onclick="history.back()">Go Back</button>
</div>
';
        }
    } else {
        echo "No records found";
    }
}

    





mysqli_close($CONNECTION);
?>











