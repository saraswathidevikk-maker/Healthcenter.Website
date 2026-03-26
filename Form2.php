<!DOCTYPE html>
<html lang="en">
 <?php include("view/template/Scripts.php"); ?>   
<style>
body {
        font-family: 'Segoe UI', sans-serif;
        background: #f4f7fb;
        margin: 0;
    }

    .container {
        width: 600px;
        margin: 50px auto;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        color: #2c5d8a;
        margin-bottom: 25px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
        color: #333;
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 14px;
        transition: 0.3s;
    }

    input:focus, textarea:focus {
        border-color: #2c5d8a;
        outline: none;
        box-shadow: 0 0 5px rgba(44,93,138,0.3);
    }

    textarea {
        resize: none;
        height: 80px;
    }

    small {
        color: red;
        font-size: 12px;
    }

    .btn-group {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    button {
        flex: 1;
        margin: 5px;
        padding: 10px;
        border: none;
        border-radius: 6px;
        font-size: 14px;
        cursor: pointer;
        transition: 0.3s;
    }

    .INSERT { background: #069d29; color: white; }
    .UPDATE { background: #1057a4; color: white; }
    .DELETE { background: #a60818; color: white; }
    .SELECT { background: #587084; color: white; }
    .CLEAR  { background: #069d29; color:white;}

    button:hover {
        opacity: 0.85;
        transform: scale(1.02);
    }

</style>
 

<body>

<div class="container">
    <h2>Employee Management</h2>

    <form action="Form.php" method="post">

        <div class="form-group">
            <label>ID</label>
            <input type="text" name="id" placeholder="Enter your ID">
        </div>

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your Name">
        </div>

        <div class="form-group">
            <label>Age</label>
            <input type="text" name="age" placeholder="Enter your Age">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email">
            <small id="emailError" style="color:red"></small>
        </div>

        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" id="PhoneNumber" name="PhoneNumber" placeholder="Enter Phone Number">
            <small id="PhoneNumberError" style="color:red"></small>
        </div>

        <div class="form-group">
            <label>Address</label>
            <textarea name="address" placeholder="Enter your Address"></textarea>
        </div>

        <div class="form-group">
            <label>Salary</label>
            <input type="text" name="salary" placeholder="Enter Salary">
        </div>

        <div class="btn-group">
            <button type="submit" id="INSERT" name="INSERT" class="INSERT" onclick="return Validate(), Validatenumber()">INSERT</button> 
            <button type="submit" id="UPDATE" name="UPDATE" class="UPDATE" onclick="return Validate(), Validatenumber()">UPDATE</button>
            <button type="submit" id="DELETE" name="DELETE" class="DELETE">DELETE</button>
            <button type="submit" id="SELECT" name="SELECT" class="SELECT">SELECT</button>
            <button type="reset"  id="CLEAR" name="CLEAR" class="CLEAR">CLEAR</button>

            <!-- <button type="submit" id="INSERT" name="INSERT" class="INSERT">INSERT</button> -->


        </div>

    </form>
</div>
</body>

</html>

<script>


function Validate(){
    let email=document.getElementById("email").value;
    let pattern=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;

    if(email==""){
        document.getElementById("emailError").innerHTML="Email field cannot be empty";
        return false;
    }
    else if(pattern.test(email)){
        document.getElementById("emailError").innerHTML="";
        return true;
    }
    else{
        document.getElementById("emailError").innerHTML="Invalid email";
        return false;
    }
}

function Validatenumber(){
    let number_format=document.getElementById("PhoneNumber").value;
    let pattern=/^\d{10}$/;

    if(number_format==""){
        document.getElementById("PhoneNumberError").innerHTML="PhoneNumber field cannot be empty";
        return false;
    }
    else if(pattern.test(number_format)){
        document.getElementById("PhoneNumberError").innerHTML="";
        return true;
    }
    else{
        document.getElementById("PhoneNumberError").innerHTML="Enter valid 10 digit number";
        return false;
    }
}

function ValidateForm() {
    return Validate() && Validatenumber();
}
$(document).ready(function(){

  alert("Welcome to Employee Management")
  $("#SELECT").click(function(){
    alert("HTML:hi");
  })

});
 

</script>
