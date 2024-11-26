<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <center>
    <h4>Enter details to register</h4>

     <form action="index.php" method="post">
          <input placeholder="Enter user name" name="un" type="text" required>
          <br>
          <br>
          <input placeholder="Enter Email" name="em" type="text" required>
          <br>
          <br>
          <input placeholder="Enter password" name="pas" type="password" required>
          <br>
          <br>
          <input type="submit" name="submit" value="Submit">
          <br>
     </form>
          <a href="login.php">Log In</a>
    </center>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $user=$_POST['un'];
    $email=$_POST['em'];
    $pas=$_POST['pas'];
    //making connection to database
 $server="localhost";
 $data_user="root";
 $data_pas="";
 $db="lab";
 $conn = mysqli_connect($server, $data_user, $data_pas, $db);
    // insert in data base
  try {
    
    $sql="INSERT INTO `user` (`user`, `email`,`pas`) VALUES ('$user', '$email', '$pas')";
    $insert=mysqli_query($conn, $sql);
    echo '
      <script>
          alert("Sign Up sucessful");
      </script>
    ';
    }
      
    //catch exception
      catch(Exception $e) {
        echo '
      <script>
          alert("Sign Up unsucessful");
      </script>; ';
      }
}

 ?>
