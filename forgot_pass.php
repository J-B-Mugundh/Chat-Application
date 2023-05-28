<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your account</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/signin.css">
    

</head>
<body>
    <div class="signin-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Forgot Password</h2>
                <p>MyChat</p>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="someone@site.com" required>
            </div>
            <div class="form-group">
                <label>Bestfriend Name</label>
                <input type="text" class="form-control" name="bf" placeholder="someone.." autocomplete="off" required>
            </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Submit</button>
            </div>

        </form>
        <div class="text-center small" style="color: #fff;">Back to sign in? <a href="signup.php" style="color: #ede902;">Click here</a></div>

<?php

session_start();
include("include/connection.php");

if (isset($_POST['submit'])){
$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
$recovery_account = htmlentities(mysqli_real_escape_string($con, $_POST['bf']));

$select_user = "select * from users where user_email='$email'  AND forgotten_answer='$recovery_account'";

$query = mysqli_query($con, $select_user);

$check_user = mysqli_num_rows($query);

if($check_user==1){
	$_SESSION['user_email']=$email;
	
	echo"<script>window.open('create_password.php','_self')</script>";
}
else{
	echo "<script>alert('Your email or bestfriend name is incorrect.')</script>";
    echo "<script>window.open('forgot_pass.php','_self')</script>";
}
}
?>
</body>
</html>


