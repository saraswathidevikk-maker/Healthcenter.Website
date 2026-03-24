<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Form.php" method="post">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" placeholder="Enter your ID"> <br><br>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your Name"> <br><br>
    <label for="age">Age:</label>
    <input type="text" id="age" name="age" placeholder="Enter your Age"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your Email"><br><br>
    <label for="number">Phone Number:</label>
    <input type="text" id="PhoneNumber" name="PhoneNumber" placeholder="Enter your Phone Number"><br><br>
    <label for="address">Address:</label>
    <textarea id="address" name="address" placeholder="Enter your Address"></textarea><br><br>
    <label for="salary">Salary:</label>
    <input type="text" id="salary" name="salary" placeholder="Enter your Salary"><br><br>
    <input type="submit" value="Submit">

    <button type="submit" id="INSERT" name="INSERT" value="INSERT">INSERT</button>
    <button type="submit" id="DELETE" name="DELETE" value="DELETE">DELETE</button>
    <button type="submit" id="UPDATE" name="UPDATE" value="UPDATE">UPDATE</button>
    <button type="submit" id="SELECT" name="SELECT" value="SELECT">SELECT</button> 
    
</form>
</body>
</html>