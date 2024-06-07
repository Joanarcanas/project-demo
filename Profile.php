<?php
session_start();

// Check if user is logged in
//if (!isset($_SESSION['email'])) {
    // Redirect user to login page if not logged in
   // header("Location: Login.php");
    //exit();
//}

// Include your database connection file
include 'connectdb.php';
// Retrieve email from session

//$Company_ID = $_SESSION['Company_ID'];
//$Email = $_SESSION['email'];
$success=0;

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $Company_ID = $_POST['Company_ID'];
        $Company_Name = $_POST['companyname'];
        $Email = $_POST['email'];
        $Contact = $_POST['phonenumber'];
        $Password= $_POST['password'];
        $profile_photo = $_POST['profile_photo'];

        $sql = "SELECT * FROM company WHERE email = '$Email'";
        $result = mysqli_query($connect, $sql);
        if ($result){
              $company=mysqli_fetch_assoc($result);
              $Company_Name=$company['companyname'];
              $Email = $company['email'];
              $Contact=$company['phonenumber'];
              $profile_photo=$company['profile_photo'];

        $sql = "UPDATE company SET companyname = '$Company_Name',email = '$Email',phonenumber = '$Contact',WHERE Company_ID = $Company_ID";
        $result = mysqli_query($connect,$sql);
        if($result){
            echo"Updated successfully";
            $sql = "UPDATE company SET profile_photo ='$profile_photo' WHERE Company_ID =$Company_ID";
            $result = mysqli_query($connect,$sql);
        }else{
            die(mysqli_error());
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile h2 {
            margin-top: 10px;
        }
        .profile p {
            color: #666;
        }
        .file-upload {
            margin-top: 20px;
        }
        .file-upload input[type="file"] {
            display: none;
        }
        .file-upload label {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <ul id="toplist">
           <li><a href="home.php">Home</a></li>  
            <li><a href="About Us.php">About Us</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="Profile.php">Profile</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
    </ul>
     

<div class="container">
    <div class="profile">
        <img id="profile-picture" src="class.jpg" alt="Profile Picture">
        <h2><?php echo $company['companyname']; ?></h2>
        <p><?php echo $company['email']; ?></p>
        <p>Phone_number:<?php echo $company['phonenumber']; ?></p>  
    </div>

    <div class="file-upload">
        <form action="gallery.php" method="post" enctype="multipart/form-data">
                <input type="file" id="profile-photo" name="profile_photo" accept="image/*" onchange="previewImage(event)">
                <label for="profile-photo">Change Profile Photo</label>
                <input type="submit" name="submit" id="submit" placeholder="" >
            </form>
        </div>
    </div>

        <!--input type="file" id="profile-photo" accept="image/*" onchange="previewImage(event)">
        <label for="profile-photo">Change Profile Photo</label-->
    </div>
</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('profile-picture');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

</body>
</html>
