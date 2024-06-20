<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="resorce/css/style.css" rel="stylesheet">

    <title>Employee Management System - Register</title>
    <style>
    body, html {
        height: 100%;
        margin: 0;
    }

    .bg {
        background-image: url("../background.jpg");
        height: 100%; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
</head>
<body>

<!-- php script start -->
<?php 
$username_err = $email_err = $pass_err = $confirm_pass_err = $gender_err = $register_err = "";
$username = $email = $gender = $pass = $confirm_pass = "";
$register_success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_REQUEST["username"])) {
        $username_err = "<p style='color:red'> * Username Can Not Be Empty</p>";
    } else {
        $username = $_REQUEST["username"];
    }

    if (empty($_REQUEST["email"])) {
        $email_err = "<p style='color:red'> * Email Can Not Be Empty</p>";
    } else {
        $email = $_REQUEST["email"];
    }

    if (empty($_REQUEST["gender"])) {
        $gender_err = "<p style='color:red'> * Gender Can Not Be Empty</p>";
    } else {
        $gender = $_REQUEST["gender"];
    }

    if (empty($_REQUEST["password"])) {
        $pass_err = "<p style='color:red'> * Password Can Not Be Empty</p>";
    } else {
        $pass = $_REQUEST["password"];
    }

    if (empty($_REQUEST["confirm_password"])) {
        $confirm_pass_err = "<p style='color:red'> * Confirm Password Can Not Be Empty</p>";
    } else {
        $confirm_pass = $_REQUEST["confirm_password"];
    }

    if ($pass !== $confirm_pass) {
        $confirm_pass_err = "<p style='color:red'> * Passwords Do Not Match</p>";
    }

    if (!empty($username) && !empty($email) && !empty($gender) && !empty($pass) && $pass === $confirm_pass) {
        // database connection
        require_once "include/connection.php";

        // Encrypt the password using MD5
        $encrypted_pass = md5($pass);

        $sql_query = "INSERT INTO admin (name, email, gender, password) VALUES ('$username', '$email', '$gender', '$encrypted_pass')";

        if (mysqli_query($conn, $sql_query)) {
            $register_success = "<div class='alert alert-success alert-dismissible fade show'>
            <strong>Registration Successful!</strong> Please <a href='login.php' class='alert-link'>login</a>.
            <button type='button' class='close' data-dismiss='alert'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
        } else {
            $register_err = "<div class='alert alert-danger alert-dismissible fade show'>
            <strong>Registration Failed: " . mysqli_error($conn) . "</strong>
            <button type='button' class='close' data-dismiss='alert'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
        }
    }
}
?>
<!-- php script end -->

<div class="bg">
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5 shadow">
                                <h4 class="text-center">Register</h4>
                                <div class="text-center my-5"><?php echo $register_err; ?><?php echo $register_success; ?></div>
                                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                    <div class="form-group">
                                        <label>Username :</label>
                                        <input type="text" class="form-control" value="<?php echo $username; ?>" name="username">
                                        <?php echo $username_err; ?>            
                                    </div>
                                    <div class="form-group">
                                        <label>Email :</label>
                                        <input type="email" class="form-control" value="<?php echo $email; ?>" name="email">
                                        <?php echo $email_err; ?>            
                                    </div>
                                    <div class="form-group">
                                        <label>Gender :</label>
                                        <select class="form-control" name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="Male" <?php if($gender == "Male") echo "selected"; ?>>Male</option>
                                            <option value="Female" <?php if($gender == "Female") echo "selected"; ?>>Female</option>
                                        </select>
                                        <?php echo $gender_err; ?>            
                                    </div>
                                    <div class="form-group">
                                        <label>Password :</label>
                                        <input type="password" class="form-control" name="password">
                                        <?php echo $pass_err; ?>            
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password :</label>
                                        <input type="password" class="form-control" name="confirm_password">
                                        <?php echo $confirm_pass_err; ?>            
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Register" class="btn btn-primary btn-lg w-100" name="register">
                                    </div>
                                    <p class="text-center">Already have an account? <a href="login.php">Login here</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="resorce/plugins/common/common.min.js"></script>
<script src="resorce/js/custom.min.js"></script>
<script src="resorce/js/settings.js"></script>
<script src="resorce/js/gleek.js"></script>
<script src="resorce/js/styleSwitcher.js"></script>
</body>
</html>
