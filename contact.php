<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact | "X" International School & College</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>


</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="index.php" class="logo">Information.</a>

   <nav class="navbar">
      <a href="index.php">HOME</a>
      <a href="register.php">PORTAL</a>
      <a href="about.php">ABOUT</a>
      <a href="contact.php">CONTACT</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

    <!---------- Contact-Page----------->
    <section class="location">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7301.840735900432!2d90.42587432656372!3d23.785849855827617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7c3b31529fb%3A0xf7145c4ec82d143d!2sMonpura%20School%20%26%20College!5e0!3m2!1sen!2sbd!4v1634881521708!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <section class="contact-me">
      <div class="row">
        <div class="contact-col">
          <div>
            <i class="fa fa-home"></i>
            <span>
              <h5 class="h55">North South University, Bashundhara, Dhaka</h5>
              <p class="para">Bangladesh</p>
            </span>
          </div>
          <div>
            <i class="fa fa-phone"></i>
            <span>
              <h5 class="h55">01969788429</h5>
              <p class="para">01521582181</p>
            </span>
          </div>
          <div>
            <i class="fa fa-envelope-o"></i>
            <span>
              <h5 class="h55">rasel.ahmedraju@northsouth.edu</h5>
              <p class="para">tashfin.ratul@northsouth.edu</p>
            </span>
          </div>
        </div>
        <div class="contact-col">
          <form action="" method="POST">
            <input type="text" class="input-text" name="ID" placeholder="Enter your ID" required>
            <input type="text" class="input-text" name="name" placeholder="Enter your name" required>
            <input type="email" class="input-text" name="email" placeholder="Enter your email" required>
            <input type="text" class="input-text" name="subject" placeholder="Enter your subject" required>
            <textarea rows="8" class="input-text" name="message" placeholder="Message" required></textarea>
            <input type="submit" name="submit" value="SUBMIT" class="contact2">
          </form>
        </div>
      </div>
    </section>
<!-- header section ends -->


<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> HOME</a>
         <a href="register.php"> <i class="fas fa-angle-right"></i> REGISTER</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> ABOUT</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> CONTACT</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +8801969788429 </a>
         <a href="#"> <i class="fas fa-phone"></i> +8801521582181 </a>
         <a href="#"> <i class="fas fa-envelope"></i> tashfinrahat1309@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Dhaka, Bangladesh - 1229 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/tashfin.rahat.7/"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/tashfin.rahat/"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com/in/tashfin-rahat-a6a708223/"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Tashfin Rahat</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->


</body>
</html>

<!-- PHP starts here -->

<?php
$conn = mysqli_connect('localhost', 'root', '', 'project2') or die(mysqli_error()); //database connection

if(isset($_POST['submit']))
{
   //to get the data from front-end

   $ID = $_POST['ID'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];
   //sql query to store the data in database

   $sql = "SELECT * FROM register_table WHERE ID='$ID'";
   $result = mysqli_query($conn, $sql);

        //Execute query and store data in database

        if ($result->num_rows > 0) {
            $sql = "INSERT INTO contact_table(ID, name, email, subject, message)
                    VALUES ('$ID', '$name', '$email', '$subject', '$message' )";
			   $result = mysqli_query($conn, $sql);

         if ($result) {

				    echo "<script>alert('Wow! User Information Inserted.')</script>";

				    $ID = "";
            $name = "";
            $email = "";
            $subject = "";
            $message = "";
			}
			else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} 
		else {
			echo "<script>alert('Woops! Your ID Does Not  Exists.')</script>";
		}
		
}
?> 

