<?php

    session_start();

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "digitalagency";
   
    $conn  = mysqli_connect($server , $username , $password ,$dbname) or die("Connection failed;");
   
    if(isset($_POST['submit'])){
       if(!empty($_POST['userName']) && !empty($_POST['email']) && !empty($_POST['password'])){
   
   
      
           $userName = $_POST['userName'];
           $email = $_POST['email'];
           $password =$_POST['password'];
           $message = '';
           
    
           $query =$pdo -> prepare('SELECT id,userName,email,password FROM
           form where email:email');

           $query -> bindParam(':email',$email);
           $query ->execute();

           $run = mysqli_query($conn,$query) or die(mysqli_error());

           if($run){
            echo "Login is succesfully!" ;
            header( "refresh:3; url=index.php" ); 
          }
         
            
       }

    }

?>