
function verify() {  
    var pw = document.getElementById("password").value;  
    var us =document.getElementById("username").value;  
    var em= document.getElementById("email").value;
    
   
    if (us.length == 0 || us.length > 200)
    {document.getElementById("message").innerHTML = "**Username cannot by blank";  
    return false;  
    }
    if(em == "" ){
        document.getElementById("message").innerHTML ="**Email cannot by blank";
        return false;
    }
   
    if(pw == "") {  
       document.getElementById("message").innerHTML = "**Fill the password please!";  
       return false;  
    }  
       
    if(pw.length < 8) {  
       document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
       return false;  
    }  
 
    if(pw.length > 15) {  
       document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
       return false;  
    }  
   
    alert("Login is succesfuly.Welcome back!")
    

  } 
  