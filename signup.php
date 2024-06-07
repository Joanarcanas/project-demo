<?php
include 'connectdb.php';
$success = 0;
$unsuccess = 0;

  if($_SERVER['REQUEST_METHOD']== 'POST'){

    $Company_ID = $_POST['Company_ID'];
    $Company_Name = $_POST['companyname'];
    $Email = $_POST['email'];
    $Contact = $_POST['phonenumber'];
    $Password = $_POST['password'];
    $Password_hash = password_hash($Password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM company WHERE email = '$Email'";
    $result = mysqli_query($connect,$sql);
    
    if($result){

        if(mysqli_num_rows($result)>0){
            $unsuccess =1;
            $error_message = "Email already exists";
        }else{
            $sql = "INSERT INTO company(companyname, email, phonenumber, password) VALUES ('$Company_Name', '$Email', '$Contact','$Password_hash')";
            $result = mysqli_query($connect, $sql);
            if($result){

                $success_message = "Registered successfully";
                header("Location: Login.php");
            }else{
                die(mysqli_error($connect));
            }

        }

    }

}


?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="mydesign.css">
        <style>
     .error{
      color: blue;
      text-align: center;
     }
   </style>
        
    </head>
    <body>
        <ul id="toplist">
            <li><a href="home.php">Home</a></li>  
            <li><a href="About Us.php">About Us</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <!--li><a href="Profile.php">Profile</a></li-->
            <li><a href="contactus.php">Contact Us</a></li>
            
            </ul>
        <h2>Register Here!</h2>
        
        <form id="form" onsubmit="return validInputs()" method="post" style="border:1px solid #ccc ;">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account</p>
                <hr>
            <label for="CompanyName"><b>CompanyName:</b></label>
            <input type="text" placeholder="Enter Companyname" id="companyname" name="companyname">
              <div class="error"></div>
              <div  class="field" id="result" style="color:white; background-color: blue; text-align: center;"></div>

            <label for="email"><b>Email:</b></label>
            <input type="text" placeholder="Enter Email" id="email" name="email">
                <div class="error"></div>
                <div  class="field" id="result2" style="color:white; background-color: beige; text-align: center;"></div>
                
            <label for="contact"><b>Contact:</b></label>
            <input type="text" placeholder="Enter phonenumber" id="phonenumber" name="phonenumber">
               <div class="error"></div>
               <div  class="field" id="result3" style="color:white; background-color: maroon; text-align: center;"></div>

            <label for="password"><b>Password:</b></label>
            <input type="password" placeholder="Enter password" id="password" name="password">
                <div class="error"></div>
                <div class="field"   id="result1" style="color:white; background-color: brown; text-align: center;"></div>

            <label for="account"><b>Account:</b></label>
            <select id="account">
                <option>--Select Account--</option>
                <option>Admin</option> 
                <option>Company</option>
            </select>
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom: 15px;">Remember me
            </label>
            <p>By creating an account you agree to our<a href="#" style="color: dodgerblue;">Terms & Privacy</a>.</p>

            <?php

            if($unsuccess){
                echo"<div>Email already exists!</div>";
            }
            if($success){
                echo"<div class='error'>SignUp successful</div>";
            }
            ?>

            <div class="clearfix">
                <button type="button" name="submit" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn" value="submit">Sign Up</button>
                <div  class="field" id="result4" style="color:white; background-color: red; text-align: center;"></div>
                    
</div>
</div>
 <!--script src="script.js"></script-->
        </form>

    </body>
</html>