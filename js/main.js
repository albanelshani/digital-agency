
function verify() {  
    var na = document.getElementById("inputF").value;  
    var em= document.getElementById("inputS").value;
    var ms =document.getElementById("inputTh").value;  
    
   
    if (na.length == 0 || na.length > 200)
    {document.getElementById("message").innerHTML = "**Name cannot by blank";  
    return false;  
    }
    if(em == "" ){
        document.getElementById("message").innerHTML ="**Email cannot by blank";
        return false;
    }

    if(ms.length ==0 ){
        document.getElementById("message").innerHTML = "**Hapesira e mesazhit nuk mund te jete boshe!"
        return false;
    }
   
 
    alert("Your Contact Informations are taken succesfuly!We will contact you as much it possible!")
    

  } 
  