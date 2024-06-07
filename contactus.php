<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="form.js"></script>
	<link rel="stylesheet" href="form.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
	<nav>
        <ul class="menu">
            <li><a href="home.php">Home</a></li>  
            <li><a href="About Us.php">About Us</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <!--li><a href="Profile.php">Profile</a></li-->
            <li><a href="contactus.php">Contact Us</a></li>
            
            
            </ul>
        

        </ul>
    </nav>
	<section class="contact-section">
		<div class="contact-bg">
			
			<h2>Contact us</h2>
			<h3>Get in touch with us</h3>
			<div class="line">
				<div></div>
				<div></div>
				<div></div>
				<br>
			</div>
			<p class="text">Pet adoption company works to make your delivery successful and enjoyable experience. Need to contact us? You can reach us through various means provided on our webpage below.</p>
		</div>
<div class="contact-body">
	<div class="contact-info">
		<div>
			<span><i class="fas fa-mobile-alt"></i></span>
			<span>Phone No.</span>
			<span class="text">+254700000000</span>
		</div>
		<div>
			<span><i class="fas fa-envelope-open"></i></span>
			<span>Email</span>
			<span class="text">petadoption@company.com</span>
		</div>
		<div>
			<span><i class="fas fa-map-marker-alt"></i></span>
			<span>Address</span>
			<span class="text">2939 Bejo street, Madaraka, Kenya</span>
		</div>
		<div>
			<span><i class="fas fa-clock"></i></span>
			<span>Opening Hours</span>
			<span class="text">Monday - Friday(9:00 AM to 5:00 PM)</span>
		</div>
	</div>
	<div class="contact-form">
		<form id="" onsubmit="return validateInputs()">
			<div>

				<input type="text" name="First Name" placeholder="First Name" class="form-control" id="firstname">
				<!--div class="error"></div>
				<div class="field" id="result" style="background-color:maroon;color: white;"></div-->

				<input type="text" name="Last Name" placeholder="Last Name" class="form-control" id="lastname">
				<div class="error"></div>
				<div id="result2" class="field" style="background-color:blue; color: white;"></div>
			</div>
			<div>
				<input type="text" name="E-mail" placeholder="E-mail" class="form-control" id="email">
				<!--div class="error"></div>
				<div id="result3" class="field" style="background-color:brown; color: white;"></div-->

				<input type="text" name="Phone" class="form-control" placeholder="Phone" id="phone">
				<div class="error"></div>
				<div class="field" id="result4" style="background-color:brown; color: white;"></div>
			</div>

				<textarea rows="5" placeholder="Message" class="form-control"></textarea>
				<input type="submit" name="submit" class="send-btn" value="send message" id="message">
				<div class="error"></div>
				<div class="field" id="result5" style="background-color:black; color:white;"></div>

				<div  class="field" id="result6" style="color:white; background-color: red; text-align: center;"></div>
				</form>
				<div class="brightness">
					<img src="image.jpg" alt="">
					<img src="pageBg.jpg">
			</div>
		</div>
	</div>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.777182351463!2d36.80947437347921!3d-1.308954835648206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f112e9eff4827%3A0x17a918597484c8ea!2sStrathmore%20University!5e0!3m2!1sen!2ske!4v1710872444658!5m2!1sen!2ske" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div class="contact-footer">
		<h3>Follow Us</h3>
		<div class="social-links">
			<a href="#" class="fab fa-facebook"></a>
			<a href="#" class="fab fa-twitter"></a>
			<a href="#" class="fab fa-instagram"></a>
			<a href="#" class="fab fa-linkedin"></a>
			<a href="#" class="fab fa-youtube"></a>
	</div>
	</section>
	<script src="form.js"></script>

</body>
</html>