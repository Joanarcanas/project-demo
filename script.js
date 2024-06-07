function validInputs() {
    var companyname = document.getElementById("companyname").value;
    var email = document.getElementById("email").value;
    var phonenumber = document.getElementById("phonenumber").value;
    var password = document.getElementById("password").value;

    // Regular expressions for validation
    var companynameRegex = /^[a-zA-Z]{8,}$/;
    var passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var phonenumberRegex = /^\+254\d{9}$/;

    // Additional validations for fields not being left empty
if (companyname.trim() === "" || email.trim() === "" || password.trim() === "" || phonenumber.trim() === "") {
   alert("Fields should not be left empty. Please fill all fields before submission.");
   
   return false;
}else{

}

    //validation for username
    //if (!companyname.match(companynameRegex)) {
       //document.getElementById("result").innerHTML = "companyname should  contain letters and not be less than 8 characters";
       //return false;
    //}else{
     //document.getElementById("result").innerHTML="";
      //}

    // Validation for email
    if (!email.match(emailRegex)) {
       document.getElementById("result2").innerHTML = "Email should have a special characters";
       return false;
    }else{
      document.getElementById("result2").innerHTML ="";
    }

    // Validation for password
if (!password.match(passwordRegex)) {
document.getElementById("result1").innerHTML = "Password should have at least 8 characters, one uppercase, special characters";
return false;
}
else{
document.getElementById("result1").innerHTML ="";
}

if (!/[A-Z]/.test(password)) {
document.getElementById("result1").innerHTML = "Password should have at least one uppercase letter!";
return false;
}

if (!/\d/.test(password)) {
document.getElementById("result1").innerHTML = "Password should have at least one number!";
return false;
}

if (!/[@$!%*?&]/.test(password)) {
document.getElementById("result1").innerHTML = "Password should have at least one special character!";
return false;
}

    // Validation for phone number
if (!phonenumber.match(phonenumberRegex)) {
// Check if phone number starts with +254
if (!phonenumber.startsWith("+254")) {
   document.getElementById("result3").innerHTML = "Phone number should start with +254.";
} else {
   document.getElementById("result3").innerHTML = "Phone number should have exactly nine digits after +254.";
}
return false;

 }  else{
     document.getElementById("result3").innerHTML = "";
 } 
 
    // If all validations pass, show success message
    //document.getElementById("result4").innerHTML = "Success:Form submitted successfully";
 alert('Form submitted successfully!');
    return true;
 }
















