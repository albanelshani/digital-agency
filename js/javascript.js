

function myFunction() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}

function verify() {  
  var pw = document.getElementById("password").value;  
  var us =document.getElementById("username").value;  
  var pw2 =document.getElementById("password2").value;
  var na =document.getElementById("name").value;
  var sn =document.getElementById("surename").value;
  var em= document.getElementById("email").value;

 
  
  if (na.length == 0 || na.length > 200)
  {document.getElementById("message").innerHTML = "**Name cannot by blank";  
  return false;  
  }else if(na.length < 3){
      document.getElementById("message").innerHTML = "**Name is to short";
      return false;
  }

  if (sn.length == 0 || sn.length > 200)
  {document.getElementById("message").innerHTML = "**Surename cannot by blank";  
  return false;  
  }
  if (us.length == 0 || us.length > 200)
  {document.getElementById("message").innerHTML = "**Username cannot by blank";  
  return false;  
  }
  if(em == "" ){
      document.getElementById("message").innerHTML ="**Email cannot by blank";
      return false;
  }
  if(!isNaN(pw2)){
    document.getElementById("message").innerHTML ="**Passwords can not contains only number.Must be combined."
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
  if(pw != pw2){
      document.getElementById("message").innerHTML ="Passwords dosen't match";
      return false;
  }
 
      
 
  alert("Registration is succesfuly.Thank you!")
  

} 



function showNavbar() {
    var element = document.getElementById("links");
    element.classList.toggle("show");
 }
