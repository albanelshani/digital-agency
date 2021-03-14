<?php

session_start();

if( isset($_SESSION['user_id']) ){
    header("Location: index.php");
}

require 'includes/dbconnect.php';


if(isset($_POST['submit'])):

    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = '';

    $query = $pdo->prepare('SELECT id,userName,email,password FROM form WHERE email = :email');
    $query->bindParam(':email', $email);
    $query->execute();

    $user = $query->fetch();

    if(count($user) > 0 && password_verify($password, $user['password']) ){

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['userName'] = $user['userName'];

        header("Location: index.php");

    } else {
        $message = 'Sorry, those credentials do not match';
    }

endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginstyle.css">
    <title>SingIn</title>
</head>
<body>
    
    <div class='bold-line'></div>
  
<div class='container'>
    
  <div class='window'>
    <div class='overlay'></div>
    <div class='content'>
      <div class='welcome'>Hello There!</div><br><br><br>
      <div class='subtitle'>We're almost done.Please Log-In.</div>

      <form  onsubmit="return verify()" action="singin.php" method="POST" autocomplete="off">
      <div class='input-fields'>
        
        <input id="username" name="username" type='text' placeholder='Username' class='input-line full-width'></input>
        <input id="email" name="email" type='email'  placeholder='Email'  class='input-line full-width'></input>
        <input id ="password" name="password" type='password' placeholder='Password' re class='input-line full-width'></input>

      </div>
      <span id = "message" style="color:rgb(255, 0, 0)"> </span> <br>
      
      <div class='spacing'>If you don't have account please <a href="singup.php">Sing-Up</a></div>
      <div>
          <input  type="submit" class='ghost-round full-width' >
        </form>
    </div>
  

<script src="js/login.js"></script>
</body>
</html>