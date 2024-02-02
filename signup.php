<?php
session_start();
if(isset($_SESSION['name'])){
        header("location: home.php");
    }
?>    
<?php 
    include "connection.php";
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

        $sql = "select * from users where username='$username'";
        $result = mysqli_query($conn,$sql);
        $count_user = mysqli_num_rows($result);
        
        $sql = "select * from users where email='$email'";
        $result = mysqli_query($conn,$sql);
        $count_email = mysqli_num_rows($result);

        if($count_user==0 || $count_email==0){
            if($password==$cpassword){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "insert into users(username, email, password) values('$username', '$email', '$hash')";
                $result = mysqli_query($conn, $sql);
            }
            else{
                echo '<script>
                alert("Password do not match..");
                window.location.href = "signup.php"
                </script>';
            }
        }
        else{
            echo'<script>
            alert("User already exists..");
            window.location.href = "index.php"
            </script>';
        }
    }
?>
  <?php
    include "navbar.php";
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup page</title>
    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div id="form">
        <h1 id="heading">Signup</h1><br>
        <form name="form" action="signup.php"method="POST">
            <label>Enter Username</label>
            <input type="text" id="user" name="user" required><br><br>
            <label>Enter Email</label>
            <input type="email" id="email" name="email" required><br><br>
            <label>Enter Password</label>
            <input type="password" id="pass" name="pass" required><br><br>
            <label>Retype Password</label>
            <input type="password" id="cpass" name="cpass" required><br><br>
            <input type="submit" id="btn" value="Signup" name="submit"/>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>