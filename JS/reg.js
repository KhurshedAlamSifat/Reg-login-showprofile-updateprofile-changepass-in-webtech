function validateForm() {
    var fname = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    
    
    var pass = document.getElementById("pass").value;
    var add = document.getElementById("address").value;

    var phn = document.getElementById("phone").value;
    var age = document.getElementById("age").value;
    
    if (fname == "" ) {
     document.getElementById("errname").innerHTML="*Please fill out full name";
      return false;
    }
    if (document.getElementById("gender1").checked == false &&  document.getElementById("gender2").checked == false)
    {
      document.getElementById("errgender").innerHTML="*Please select gender";
      return false;
    }

    if ( age < 18) {
        document.getElementById("errage").innerHTML="*Please enter valid age";
        return false;
      }
      
    if(!res)
    {
        document.getElementById("erremail").innerHTML="*Email format is not correct";
        return false; 
    }

      if (phn == "" ) {
        document.getElementById("errphn").innerHTML="*Please fill out Phone no";
         return false;
       }

    if (add == "" ) {
        document.getElementById("erradd").innerHTML="*Please fill out address";
         return false;
       }
    if ( pass.length < 5) {
        document.getElementById("errpass").innerHTML="*Please enter password";
        return false;
      }
   
  }