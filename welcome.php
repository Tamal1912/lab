<?php
session_start();
if (!isset($_SESSION['email'])){
    header('location:lgoin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deatils</title>
</head>
<body>
    <center>
    <h1>Welcome</h1>
    <p>Your details</p>
    <?php
    echo 'User : '. $_SESSION['name'];
    echo '<br>';
    echo 'Email : '.  $_SESSION['email'];
    echo '<br>';
    ?>
     <a href="logout.php">Log out</a>
</center>
</body>
</html>