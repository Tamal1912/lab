<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <center>
        <h1>Log In</h1>    
         <form action="login.php" method="post">
              <input placeholder="Enter Email" name="em" type="text" required>
              <br>
              <br>
              <input placeholder="Enter password" name="pas" type="password" required>
              <br>
              <br>
              <input type="submit" value="login" name="login">
         </form>
        </center>
</body>
</html>
<?php
if (isset($_POST['login'])) {
    $email=$_POST['em'];
    $pas=$_POST['pas'];
        //making connection to database
 $server="localhost";
 $data_user="root";
 $data_pas="";
 $db="lab";
 $conn = mysqli_connect($server, $data_user, $data_pas, $db);

    $sql=" select user,email from user where email='$email' and pas='$pas' ";
    $query=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($query);

    if ($data!=NULL) {
        session_start();
        $_SESSION['name']=$data['user'];
        $_SESSION['email']=$data['email'];
        header('location:welcome.php');
     }
     else {
        echo '
        <script>
            alert("Invalid email or password");
        </script>; ';
     }
}
?>