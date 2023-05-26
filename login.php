<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>My Awesome Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	
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
$sql1="select * from students where stdid='".$_POST['stdid']."' and
passwd='".$_POST['passwd']."'";
$result1=mysqli_query($conn,$sql1);
if (!$result1) {
printf("Error: %s\n", mysqli_error($conn));
}
$num =mysqli_fetch_array($result1);
if($num>0)
{
echo"<table border='1' cellpadding='5' width='90%' align='center'>";
echo"<tr>";
echo"<th>stdid</th>";
echo"<th>stdName</th>";
echo"<th>email</th>";
echo"<th>dept</th>";
echo"<th>age</th>";
echo"<th>mobileno</th>";
echo"<th>doj</th>";
echo"</tr>";
$sql2="select * from students where stdid='".$_POST['stdid']."'";
$result2=mysqli_query($conn,$sql2);
while($row = $result2->fetch_assoc())
{
echo"<tr>";
echo"<td>".$row["stdID"]."</td>";
echo"<td>".$row["stdName"]."</td>";
echo"<td>".$row["email"]."</td>";
echo"<td>".$row["dept"]."</td>";
echo"<td>".$row["Age"]."</td>";
echo"<td>".$row["mobileNo"]."</td>";
echo"<td>".$row["Doj"]."</td>";
echo"</tr>";
}
echo"</table>";
}
else
{
echo'<script> alert("Invalid username or password or create new account
")</script>';
}
$conn->close();
}
?>