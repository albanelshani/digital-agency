<?php
 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "digitalagency";

 $conn  = mysqli_connect($server , $username , $password ,$dbname);

 if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){


   
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message =$_POST['message'];

 
        $query = "insert into contactForm(name ,email,message) values('$name' , '$email' , '$message')";

   
        $run = mysqli_query($conn,$query) or die(mysqli_error());

       
        if($run){
          echo "Message is Submitted successfully!<br>We will contact you very soon!" ;
          header( "refresh:3; url=index.php" ); 
       
        }

    
        else{
            echo "Message not submitted successully";
            header('location:contact.php');
            
        }
        
            
     }
    else{
        echo "<p> <font color=red>All fields are required.</font><br>Message not submmitted!<br>Plase go back and fulfill! </p>";
        header('location:contact.php');

    }
    
 

}


?>