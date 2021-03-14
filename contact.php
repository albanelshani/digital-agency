
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
          $message = "Message is Submitted successfully!<br>We will contact you very soon!" ;
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
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ContactUs</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/mail.svg"/>

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form  class="contact-Form" action="contact.php"  onsubmit="return verify()" method="POST" class="contact2-form validate-form">
					<span class="contact2-form-title">
						Contact Us
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input id="inputF" class="input2" type="text" placeholder="Name" name="name">
						
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input  id="inputS" class="input2" type="email" placeholder="Email" name="email">
						
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea id="inputTh" class="input2" placeholder="Message" name="message"></textarea>
						
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button type="submit" name="submit" class="contact2-form-btn">
								Send Your Message
							</button>
						</div>
					</div>
					<p id="message"></p>
				</form>
			</div>
		</div>
	</div>





<script src="js/main.js"></script>

	
</body>
</html>
