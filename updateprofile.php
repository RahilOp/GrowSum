<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,
shrink-to-fit=no">
<title>abc</title>
</head>
<body>
<div id="login-page">
<div class="container " align ="center">
<form class="form-login" name="login" method="post">
<h2 class="form-login-heading">update profile</h2>
<div class="login-wrap cont-1">
<input type="text" class="form-control" name="stdid"
placeholder="Student id" required autofocus>
<br>
<input type="text" class="form-control"
name="contactno" placeholder="new contact no" required autofocus>
<br>
<input type="text" class="form-control" name="email"
placeholder="new email" required autofocus>
<br>
<input type="password" class="form-control"
name="passwd" required placeholder="Password">
<button class="btn btn-secondary btn-lg btn-block"
name="submit" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
<hr>
</form>
<div class="registration">
Don't have an account yet?<br/>
<a class="" href="registration.php">
Create an account
</a><br>
<a
href="http://localhost/assign11/login.php">back to login page</a>
</div></div></div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE
1Pi6jizo" crossorigin="anonymous"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.mi
n.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86d
IHNDz0W1" crossorigin="anonymous"></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.j
s"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xI
M+B07jRM" crossorigin="anonymous"></script>
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
$sql2="update students set mobileno ='".$_POST['contactno']."' where
stdid='".$_POST['stdid']."'";
$result2=mysqli_query($conn,$sql2);
$sql3="update students set email ='".$_POST['email']."' where
stdid='".$_POST['stdid']."'";
$result3=mysqli_query($conn,$sql3);
echo'<script> alert("database has been updated")</script>';
}
else
{
echo'<script> alert("Invalid username or password")</script>';
}
$conn->close();
}
?>
