<?php
include "connectdb.php";
$unsuccess =0;
$success = 0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $Email =$_POST['email'];
    $password = $_POST['password'];
    $sql="SELECT * FROM company WHERE email = '$Email'";
    $result = mysqli_query($connect, $sql); 
    if($result){
        if(mysqli_num_rows($result)>0){
            $company=mysqli_fetch_assoc($result);
            $password_hash = $company['password'];

            if(password_verify($password,$password_hash)){
                session_start();
                $_SESSION['email']=$Email;
                $_SESSION['Company_ID']=$company['Company_ID'];
                header("location:home.php");
            }else{
                $unsuccess =1;
            }
    
        }
    }
}

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Project</title>

        <style>
     .error{
      color: blue;
      text-align: center;
     }
   </style>
      <link rel="stylesheet" href="mydesign.css">
      
    </head>
        <body>
            <ul id="toplist">
            <li><a href="home.php">Home</a></li>
            <li><a href="About Us.php">About Us</a></li>
            <li><a href="signup.php">SignUp</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="Profile.php">Profile</a></li>
            </ul>
            <h2>Login Here!</h2>
        
        <form action="home.php" onsubmit="return validInputs()" method="POST" style="border:1px solid #ccc ;">
            <div class="container">
                <h1>Login</h1>
                <p>Please fill in this form to login into your account</p>
                <hr>
           
            <label for="email"><b>Email:</b></label>
            <input type="text" placeholder="Enter Email" id="email" name="email">
            
            <label for="password"><b>Password:</b></label>
            <input type="password" placeholder="Enter password" id="password" name="password">
           
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom: 15px;">Remember me
            </label>
            <p>By creating an account you agree to our<a href="#" style="color: dodgerblue;">Terms & Privacy</a>.</p>

            <?php

            if($unsuccess){
                echo"<div class='error'>Invalid login</div>";
            }
            //if($success){
                //echo"<div class='error'>Login successful</div>";
            //}
            ?>
            
            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="loginbtn" value="submit">Login</button>

                <div> Don't have an account?
                    <a href = "signup.php">SignUp</a>
        </div>
                    
</div>
</div>
        </form>


  </body>
</html>



       