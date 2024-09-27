<?php
include_once('config/setting-configuration.php');
if (isset($_SESSION["adminSession"])) {
    echo "<script>alert('User is Logged In.'); window.location.href = 'dashboard/admin/authentication/admin-class.php';</script>";
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Sign Up</title>
    <link rel="stylesheet" href="src/css/style.css">
    
</head>

<body class="body1">
    <div class="container">
        <div class="box">        
            <h1>Sign In</h1>
            <form class="form-box" action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <button type="submit" name="btn-signin">Sign In</button>
            </form>
        </div>
    </div>

    <div class="container-register">
        <div class="box1">
            <h1>Registration</h1>
            <form class="form-box1" action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
                <input type="text" name="username" placeholder="Enter Username" required>
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <button type="submit" name="btn-signup">Sign Up</button>
            </form>
        </div>
    </div>
</body>

</html>