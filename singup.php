<?php
    session_start();

    if( isset($_SESSION['user_id']) ){
        header("Location: /");
    }

    require 'includes/dbconnect.php';

    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName =$_POST['lastName'];
        $userName= $_POST['userName'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $message = '';

        $sql = 'INSERT INTO form (firstName, lastName,userName,email,password) VALUES (:firstName,:lastName,:userName,  :email, :password)';
        $query = $pdo->prepare($sql);
        $query->bindParam('firstName', $firstName);
        $query->bindParam('lastName', $lastName);
        $query->bindParam('userName', $userName);
        $query->bindParam('email', $email);
        $query->bindParam('password', $password);
        
        if($query->execute()) {
            $message = "Successfully created your account";
            header("Location:index.php");
        } else {
            $message = "A problem occurred creating your account";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/singupstyle.css">
    <title>SingUp</title>
</head>
<body>
    
    <div class='bold-line'></div>
  
<div class='container'>
    
  <div class='window'>
    <div class='overlay'></div>
    <div class='content'>
      <div class='welcome'>Hello There!</div><br><br><br>
      <div class='subtitle'>We're almost done. Before using our services you need to create an account.</div>
      <form  onsubmit="return verify()"  action="singup.php"    method="POST"  id="form"  autocomplete="off">
      <div class='input-fields'>

        <input id="name" name="firstName" type="text" placeholder='Name' class='input-line full-width' autocomplete="off"  ></input>
        <input id="surename" name="lastName" type="text" placeholder='Surename' class='input-line full-width' ></input>
        <input  id="username" name="userName" type='text' placeholder='Username' class='input-line full-width'></input>
        <input id="email" name="email" type='email'   placeholder='Email'  class='input-line full-width'></input>
        <input id="password" name="password" type='password' placeholder='Password' class='input-line full-width'></input>
        <input id="confirmPassword" name="confirmPassword" type='password' placeholder='Confirm Password' class='input-line full-width'></input>

      </div>
    </br>
      <span id = "message" style="color:rgb(207, 3, 3)">  </span> <br>
      <br>  
     
      
      <div class='spacing'>If you have account just <a href="singin.php">Log-In</a></div>
      <div>
          <input type="submit" name="submit" class='ghost-round full-width'>
        </div>
        </form>
    </div>


<script src="js/javascript.js"></script>
</body>
</html>