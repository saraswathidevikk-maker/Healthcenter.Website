<?php 
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    header("Location: Login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include("view/template/Header.php"); ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Appointment Form</title>

<!-- Bootstrap 3 (IMPORTANT) -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style>
body{
    background:#f7f9fc;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Center the content */
.main-content{
    width:100%;
    display:flex;
    justify-content:center;
    margin-top:40px;
}

/* Appointment card */
.appointment-card{
    width:100%;
    max-width:800px;
    background:#fff;
    border-radius:10px;
    box-shadow:0 8px 20px rgba(0,0,0,0.15);
}

.card-header{
    background:#2e8b0a;
    color:white;
    font-size:20px;
    font-weight:bold;
    padding:15px;
    text-align:center;
    border-radius:10px 10px 0 0;
}

.card-body{
    padding:30px;
}

label{
    font-weight:600;
}

.btn-submit{
    background:#2e8b0a;
    color:white;
    padding:10px 40px;
    border:none;
    border-radius:30px;
}

.btn-submit:hover{
    background:#1f6a07;
}

.required-star{
    color:red;
}
</style>

</head>

<body>
<div class="container text-center">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>

    <p>
        <strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?> |
        <strong>Phone Number:</strong> <?php echo htmlspecialchars($_SESSION['number']); ?>
    </p>
</div>

<div class="main-content">

<div class="appointment-card">

<div class="card-header">
Make an Appointment
</div>

<div class="card-body">

<form method="post" action="Token.php">

            <div class="row">

            <div class="col-md-12 col-sm-12">
            <label>Date of Birth</label>
            <input type="date" id="dob" class="form-control" name="dob" onchange="CalculateAge()">
            <small id="dobError" style="color:red"></small>

            <label>Age</label>
            <input type="text" id="age" class="form-control" name="age" readonly>
            </div>

            </div>

            <br>

            <div class="row">

            <div class="col-md-6">
            <label>Select Department<span class="required-star">*</span></label>
            <select name="department" class="form-control" required>
            <option value="">Select Department</option>
            <option>General Health</option>
            <option>Cardiology</option>
            <option>Dental</option>
            <option>Medical Research</option>
            <option>Orthopedics</option>
            <option>Neurology</option>
            </select>
            </div>

            <div class="col-md-6">
            <label>Select Doctor<span class="required-star">*</span></label>
            <select name="Doctor" class="form-control" required>
            <option value="">Select Doctor</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            <option>E</option>
            <option>F</option>
            </select>
            </div>

            </div>

            <br>

            <div class="row">

            <?php
            $today = date('Y-m-d'); // gets today's date in yyyy-mm-dd format ?>
            <div class="col-md-6">
                <label>Appointment Date<span class="required-star">*</span></label>
                <input type="date" name="date" class="form-control" required min="<?php echo $today; ?>">
            </div>

            <div class="col-md-3">
            <label>Appointment Time<span class="required-star">*</span></label>
            <input type="time" name="time" class="form-control" required>
            </div>

            <div class="col-md-3">
            <label>AM / PM</label>
            <select name="ampm" class="form-control">
            <option>AM</option>
            <option>PM</option>
            </select>
            </div>

            </div>

            <br>

            <div>
            <label>Additional Message</label>
            <textarea name="message" class="form-control" rows="4"></textarea>
            </div>

            <br>

            <div class="text-center">
            <button type="submit" class="btn btn-submit">Submit</button>
            </div>

</form>

</div>

</div>

</div>

<?php include("view/template/Footer.php"); ?>

<!-- Bootstrap 3 JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
        function CalculateAge(){

        let dob=document.getElementById("dob").value;

        if(dob===""){
        document.getElementById("age").value="";
        document.getElementById("dobError").innerHTML="Select DOB";
        return;
        }

        document.getElementById("dobError").innerHTML="";

        let dobDate=new Date(dob);
        let today=new Date();

        let age=today.getFullYear()-dobDate.getFullYear();

        let monthDifference=today.getMonth()-dobDate.getMonth();

        if(monthDifference<0 || (monthDifference===0 && today.getDate()<dobDate.getDate())){
        age--;
        }

        document.getElementById("age").value=age;

        } 
</script>
</body>
</html>