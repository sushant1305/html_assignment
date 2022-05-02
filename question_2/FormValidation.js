function validateForm() {
    var name=document.getElementById('name').value;
    var phone=document.getElementById('phone').value;
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    var phone_type = /^\d{10}$/;
    var verify_password = document.getElementById('verify_password').value;
    var at_validate=email.indexOf("@");  
    var dot_validate=email.lastIndexOf(".");  
 
    if (name == "") {
      document.getElementById("name_error").innerHTML="Please enter your name !";
      return false;
    }
    else{
      document.getElementById("name_error").innerHTML="";
    }

    if (at_validate<1 || dot_validate<at_validate+2 || dot_validate+2>=email.length){
      document.getElementById("email_error").innerHTML="Please enter a valid e-mail address";  
      return false;  
    }
    else{
      document.getElementById("email_error").innerHTML=""; 
    }

    if (password.length <= 6){
      document.getElementById("password_error").innerHTML="Password should be minimum 8 characters";
      return false;
    }
    else{
      document.getElementById("password_error").innerHTML="";
    }
	  if (password != verify_password){
      document.getElementById("verify_password_error").innerHTML="Password do not match";
      return false;
    }
    else{
      document.getElementById("verify_password_error").innerHTML="";
    }

    if (phone.match(phone_type)) {
      document.getElementById("phone_error").innerHTML="";
      return true;
    }
    else{
      document.getElementById("phone_error").innerHTML="Please enter correct phone number";
      return true;
    }
    
  }
  
  function clear_textbox(){
    document.getElementById("emp_details_form").reset();
    document.getElementById("name_error").innerHTML="";
    document.getElementById("zipcode_error").innerHTML="";
    document.getElementById("phone_error").innerHTML="";
    document.getElementById("email_error").innerHTML="";
    document.getElementById("password_error").innerHTML="";
    document.getElementById("verify_password_error").innerHTML="";
  }