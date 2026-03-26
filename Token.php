<html>
<?php
/* $name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number']; */
session_start();

$dob = $_POST['dob'];
$age = $_POST['age'];
$department = $_POST['department'];
$Doctor = $_POST['Doctor'];
$date = $_POST['date'];
$time = $_POST['time'];
$ampm = $_POST['ampm'];
$message = $_POST['message'];
?>

<?php include("view/template/Header.php"); ?>

<body id="top">



<section class="container mt-5">

<div class="card shadow-lg">
<div class="card-header bg-primary text-white">

<h3 class="text-center">Appointment Details</h3>
</div>

<div class="card-body">

<table class="table table-bordered">

<tr>
<th>Name</th>
<td><?php echo $_SESSION['name']; ?></td>
</tr>

<tr>
<th>Email</th>
<td><?php echo $_SESSION['email'];?></td>
</tr>

<tr>
<th>Phone Number</th>
<td><?php echo $_SESSION['number']?></td>
</tr>

<tr>
<th>Date of Birth</th>
<td><?php echo $dob; ?></td>
</tr>

<tr>
<th>Age</th>
<td><?php echo $age; ?></td>
</tr>

<tr>
<th>Department</th>
<td><?php echo $department; ?></td>
</tr>

<tr>
<th>Doctor</th>
<td><?php echo $Doctor; ?></td>
</tr>


<tr>
<th>Appointment Date</th>
<td><?php echo $date; ?></td>
</tr>

<tr>
<th>Appointment Time</th>
<td><?php echo $time . " " . $ampm; ?></td>
</tr>

<tr>
<th>Message</th>
<td><?php echo $message; ?></td>
</tr>

</table>
<div class="alert alert-success text-center">
Your appointment has been successfully booked.
</div>

<div class="text-center">
<a href="Logout.php" class="btn btn-success">Logout</a>
</div>

</div>
</div>

</section>

<?php include("view/template/Footer.php"); ?>
<?php include("view/template/scripts.php"); ?>
</body>
</html>