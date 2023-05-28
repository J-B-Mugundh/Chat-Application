<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/signup.css">
    

</head>
<body>
    <div class="signup-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Sign Up</h2>
                <p>Fill out this form and start chatting with your friends.</p>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="user_name" placeholder="Example: Rolex" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="user_pass" placeholder="Password" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="user_email" placeholder="someone@site.com" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Country</label>
                <select class="form-control" name="user_country" required>
                <option disabled="">Select a Country</option>
                <option>India</option>
                <option>USA</option>
                <option>UK</option>
                <option>Pakistan</option>
                <option>Afghanistan</option>
                <option>Japan</option>
                <option>Germany</option>
                <option>China</option>
                </select>
            </div>

            <div class="form-group">
                <label>Country</label>
                <select class="form-control" name="user_gender" required>
                <option disabled="">Select your Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
                </select>
            </div>

            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a> </label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
            </div>
             <?php include("signup_user.php"); ?> 
        </form>
        <div class="text-center small" style="color: #fff;">Already have an account? <a href="signin.php" style="color: #ede902;">Sign in</a></div>

    </div>
</body>
</html>