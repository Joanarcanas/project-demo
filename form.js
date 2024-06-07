
    function validateInputs() {
        // Get references to form fields
        var firstName = document.getElementById('firstname').value;
        var lastName = document.getElementById('lastname').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var message = document.getElementById('message').value;

        //regular expression for validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var phoneRegex = /^\+254\d{9}$/; 
        var emailRegex = /\S+@\S+\.\S+/;

       // additional validations for fields not being left empty.
        if (firstName.trim() === "" || email.trim() === "" || lastName.trim() === "" || phone.trim() === "") {
        alert("Fields should not be left empty. Please fill all fields before submission.");
        
        return false;
    }else{
     
    }

     if (firstName.length < 4) {
        alert("First name must be at least four letters long.");
        return false;
    }

    // Check if last name is less than four letters
    if (lastName.length < 4) {
        alert("Last name must be at least four letters long.");
        return false;
    }

        // Validate first name and last name
        if (firstName === '') {
            document.getElementById('result').innerText = 'First name is required';
            return false; // Prevent form submission
        }

        if (lastName === '') {
            document.getElementById('result2').innerText = 'Last name is required';
            return false; // Prevent form submission
        }

        // Validate email format
        /*var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            document.getElementById('result3').innerText = '';
            return false; // Prevent form submission
        }*/


        /*if (!email.match(/\S+@\S+\.\S+/)) {
        alert("Please enter a valid email address.");
        return false;
    }*/

    // Check if email contains @ and .
    if (!email.includes("@") || !email.includes(".")) {
        alert("Email must contain @ and . characters.");
        return false;
    }

        // Validate phone number format
        var phoneRegex = /^\+254\d{9}$/; // Phone number should start with +254 and have 9 digits after
        if (!phoneRegex.test(phone)) {
            document.getElementById('result4').innerText = 'Phone number should start with +254 and have 9 digits';
            return false; // Prevent form submission
        }

        if (message==='') {
            document.getElementById('result5').innerText = 'message required!';
            return false;
        }

        // If all validations pass, show success message and allow form submission
        alert('Form submitted successfully!');
        return true;
    }

