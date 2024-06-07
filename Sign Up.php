<?php 
//insert data from the user to the database
//connect to db
include 'connectdb.php';
$success = 0;
$unsuccess = 0;

  
if ($_SERVER['REQUEST_METHOD']== 'POST') {
  // code...
  //pick data user has entered
   
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
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>SignUp</title>
   <link rel="stylesheet" href="Design.css">  
</head>
<body>
   <ol id="toplist">
     <li class="left"><a href="Home.php">Home</a></li>

     <li><a href="profile3.php">Profile</a></li>
     <li><a href="About.php">About</a></li> 
   </ol>
  
   <div class="title"></div>
   <div class="container">
   <div class="imgBx">
      <div class="loginBx"></div>
      <div class="Loginform">
         <h3>Register here</h3>
         <form id="form" onsubmit="return validInputs()" method='post'>
           <div class="input-control">
           <label>Username</label>
              <input type="text" name="username" placeholder="Enter username" id="username">
              <div class="error"></div>
              <div  class="field" id="result" style="color:white; background-color: blue; text-align: center;"></div>
              
            </div>

            <div id="input-control">

               <label>Email: </label>
               <input type="email" name="email" placeholder="Enter Email" id="email">
               <div class="error"></div>
                <div  class="field" id="result2" style="color:white; background-color: beige; text-align: center;"></div>
            </div>


            <div class="input-control">
               <label>Password: </label>
               <input type="password" name="password" placeholder="Enter Password" id="password">
               <div class="error"></div>
                <div class="field"   id="result1" style="color:white; background-color: brown; text-align: center;"></div>
            </div>
            

            <div class="input-control">
               <label>Phone number</label>
               <input type="tel" name="phone_number" placeholder="Enter phone number" id="phone_number">
               <div class="error"></div>
               <div  class="field" id="result3" style="color:white; background-color: maroon; text-align: center;"></div>
            </div>
           

            <label>Account: </label>
            <select id="account">
               <option>--Select account--</option>
               <option>Student</option>
               <option>Staff</option>
            </select>

            <?php 
  if($unsuccess) {
    // code...
    echo"<div>Email already exists!</div>";
  }
  if($success) {
    // code...
    echo"<div class='error'>SignUp successful</div>";
  }

   ?>
            
            <input type="submit" name="submit" value="submit" class="submit">
            <div  class="field" id="result4" style="color:white; background-color: red; text-align: center;"></div>

         </form>
      </div>
      <div>Already have an account?<a href="Login.php">Login</a></div>
   </div>
   </div>
   <script src="script.js"></script>
   
</body>
</html>












