<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,
shrink-to-fit=no">
<title>My Signup Page!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
<script type="text/javascript">
function valid()
{
var
mail=/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[
a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
if(document.register.email.value.match(mail))
;
else
{
alert("enter valid email");
document.register.email.value.focus();
return false;
}
if(document.register.password.value=="")
{
alert("Current Password Field is Empty !!");
document.register.password.value.focus();
return false;
}
else if(document.register.confirm_password.value=="")
{
alert("Confirm Password Field is Empty !!");
document.register.confirm_password.focus();
return false;
}
else if(document.register.password.value!=
document.register.confirm_password.value)
{
alert("Password and Confirm Password Field do not match !!");
document.register.confirm_password.focus();
return false;
}
var decimal=
/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,15}$/;
if(document.register.password.value.match(decimal))
{
return true;
}
else
{
alert("use strong password of 6 to 15 length havin 1
lowercase,uppercase,number,special")
return false;
}
}
</script>

<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="4df962b6e04c4ea2ba7ad99a140eb95d (1).png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="button" name="button" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="registration.php" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>


<?php
if(isset($_POST['submit']))
{
$servername="localhost";
$username="root";
$password="";
$dbname="student";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Connection Failed: " .mysqli_error());
}
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];
$contactno=$_POST['contactno'];
$rollno=$_POST['rollno'];
$doj=$_POST['doj'];
$dept=$_POST['dept'];
$age=$_POST['age'];
$query=mysqli_query($conn, "insert ignore into students(stdid,passwd,stdName,doj,age,dept,mobileno,email) values('$rollno','$password','$fullname','$doj','$age','$dept','$contactno ','$email')");
echo'<script> alert("Registration successfull. Now You can login!")</script>';
}
?>
