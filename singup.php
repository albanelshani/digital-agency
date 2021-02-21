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
      <form  action="connect.php"    method="POST" onsubmit ="return verify()" id="form"  autocomplete="off">
      <div class='input-fields'>

        <input id="name" name="firstName" type="text" placeholder='Name' class='input-line full-width' autocomplete="off"  ></input>
        <input id="surename" name="lastName" type="text" placeholder='Surename' class='input-line full-width' ></input>
        <input  id="username" name="userName" type='text' placeholder='Username' class='input-line full-width'></input>
        <input id="email" name="email" type='email'   placeholder='Email'  class='input-line full-width'></input>
        <input id="password" name="password" type='password' placeholder='Password' class='input-line full-width'></input>
        <input id="password2" name="password" type='password' placeholder='Password' class='input-line full-width'></input>

      </div>
    </br>
      <span id = "message" style="color:rgb(207, 3, 3)"> </span> <br>
      <br>  
      
      <div class='spacing'>If you have account just <a href="singin.html">Log-In</a></div>
      <div>
          <input type="submit" name="submit" class='ghost-round full-width'>
        </div>
        </form>
    </div>


<script src="js/javascript.js"></script>
</body>
</html>