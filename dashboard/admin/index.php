<?php 
require_once 'authentication/admin-class.php';

$admin = new ADMIN();
if (!$admin->isUserLoggedIn()) {
    $admin->redirect();
}


$stmt = $admin->runQuery("SELECT * FROM user WHERE id = :id");
$stmt->execute(array(":id" => $_SESSION['adminSession']));
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="../../src/css/style.css">
</head>
<body>
    <div class="container">
        <div class="btnS"> 
        <h1 class="welcome-message">Welcome <?php echo htmlspecialchars($user_data['email']); ?></h1>
        <button class="sign-out-button"><a href="authentication/admin-class.php?admin_signout">SIGN OUT</a></button>
        </div>
    </div>
</body>
</html>