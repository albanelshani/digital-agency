<?php
 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "digitalagency";

 $conn  = mysqli_connect($server , $username , $password ,$dbname);

 if(isset($_POST['submit'])){

    if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['userName']) && !empty($_POST['email']) && !empty($_POST['password'])){

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

        $query = "insert into form(firstName,lastName,userName,email,password) values('$firstName' , '$lastName' , '$userName' , '$email' , '$password')";

        function createUser($email){
            $sql = "SELECT count(email) FROM form WHERE email='$email'" ;
         
            $result = mysql_result(mysql_query($sql),0) ;
         
            if( $result > 0 ){
             die( "There is already a user with that email!" ) ;
            }//end if
         }

        $run = mysqli_query($conn,$query) or die(mysqli_error());

       
        if($run){
          echo "Form Submitted successfully<br>" ;
          
          $_SESSION['userName'] = $userName;
            echo "Welcome ".$_SESSION['userName']."!<br>Data sot e regjistrimit eshte:<br>";
            echo(date("Y-m-d"));
             header('location:index.php');
          
        }

    
        else{
            echo "Form not submitted successully";
            header('location:singup.php');
        }
        
            
     }
    else{
        echo "<p> <font color=red>All fields are required.</font><br>Form not submmitted!<br>Plase go back and fulfill! </p>";
        header('location:singup.php');

    }
    
 
}


?>