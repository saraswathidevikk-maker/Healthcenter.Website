<section id="registration">
<div class="container">
<div class="row">

<div class="col-md-6 col-sm-6">
    <img src="assets/images/appointment-image.jpg" class="img-responsive" alt="">
</div>

<div class="col-md-6 col-sm-6">

<form id="registration-form" method="post" action="Register.php">

        <div class="section-title bg-green wow fadeInUp" data-wow-delay="0.4s">
        <h2>User Registration</h2>
        </div>

        <div class="col-md-6 col-sm-6">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Full Name" required>
        </div>

        <div class="col-md-6 col-sm-6">
        <label>Email</label>
        <input type="email" class="form-control" id="email" name="email" onchange="Validate()" placeholder="Your Email">
        <small id="emailError" style="color:red"></small>
        </div>

        <div class="col-md-12 col-sm-12">
        <label>Phone Number</label>
        <input type="tel" id="number" class="form-control" name="number" onchange="Validatenumber()" placeholder="Enter your Valid Number">
        <small id="numberError" style="color:red"></small>
        </div>

        <!-- <div class="col-md-12 col-sm-12">
        <label>Date of Birth</label>
        <input type="date" id="dob" class="form-control" name="dob" onchange="CalculateAge()">
        <small id="dobError" style="color:red"></small>

        <label>Age</label>
        <input type="text" id="age" class="form-control" name="age" readonly>
        </div>  -->

        <div class="col-md-12 col-sm-12">
            <label>Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
            </div>

            <div class="col-md-12 col-sm-12">
            <label>Confirm Password</label>
            <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Password">
            <small id="passwordError" style="color:red"></small>
        </div>

        <!-- <div class="col-md-12 col-sm-12">
        <label>Additional Message</label>
        <textarea class="form-control" rows="4" name="message" placeholder="Message"></textarea>
        </div> -->

        <br>

        <button type="button <br>" onclick="return Validate() && Validatenumber()" class="btn btn-success w-100">Register</button>

</form>
</div>
</div>
</div>
</section>

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
        document.getElementById("emailError").innerHTML="Invalid email (use lowercase)";
        return false;
        }

        }

        function Validatenumber(){

        let number_format=document.getElementById("number").value;
        let pattern=/^\d{10}$/;

        if(number_format==""){
        document.getElementById("numberError").innerHTML="Number field cannot be empty";
        return false;
        }
        else if(pattern.test(number_format)){
        document.getElementById("numberError").innerHTML="";
        return true;
        }
        else{
        document.getElementById("numberError").innerHTML="Enter valid 10 digit number";
        return false;
        }

        }
        
      function Validate(){

        let password = document.getElementById("password").value;
        let confirmPassword = document.getElementById("confirmPassword").value;
        let error = document.getElementById("passwordError");

        if(password === "" || confirmPassword === ""){
            error.innerHTML = "Password fields cannot be empty";
            return false;
        }

        if(password !== confirmPassword){
            error.innerHTML = "Passwords do not match";
            return false;
        }

        error.innerHTML = "";
        return true;

        }


            /* function CalculateAge(){

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

            }  */

</script>