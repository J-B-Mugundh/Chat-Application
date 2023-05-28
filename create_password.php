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
                <h2>Create Password</h2>
                <p>MyChat</p>
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" class="form-control" name="pass1" placeholder="Enter Password" autocomplete="off" required>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="pass2" placeholder="Confirm Password" autocomplete="off" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="change">Change</button>
            </div>
 
        </form>
</div>
 <?php

session_start();
include("include/connection.php");

if(isset($_POST['change'])){
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];

	if($pass1 != $pass2){
	echo"
		<div class='alert alert-danger'>
			<strong>Your New password didnt match with the confirm 				password</strong>
		</div>
	";
	}

	if($pass1 < 9 AND $pass2 < 9){
		echo"
	<div class='alert alert-danger'>
			<strong>Use 9 or more than 9 characters</strong>
	</div>
	";
	}

	if($pass1 == $pass2){
	$update_pass = mysqli_query($con, "UPDATE users SET user_pass='$pass1' 	WHERE user_email='$user'");
	session_destroy();

	echo "<script>alert('Go ahead and sign in')	</script>";
	echo "<script>window.open('signin.php','_self')</script>";
}

}

?>
</body>
</html>




