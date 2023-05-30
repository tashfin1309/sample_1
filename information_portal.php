<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Information Collection Portal | "X" International School & College</title>

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

<!-- header section ends -->

<!-- <section>
<?php echo "<h1>Welcome " . $_SESSION['ID'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</section> -->

<section class="info">
        <div class="info-content">
         <div class="wrapperinfo">
            <h1>Add Information</h1>
            <br><br><br>
            <form action="" method="POST">
               <table class="table-info">
               <tr>
                     <td>ID : </td>
                     <td>
                        <input type="text" class="input-text" name="ID" placeholder="Your ID">
                     </td>
                  </tr>
                  <tr>
                     <td>Full Name : </td>
                     <td>
                        <input type="text" class="input-text" name="full_name" placeholder="Your name">
                     </td>
                  </tr>
                  <tr>
                     <td>Class : </td>
                     <td>
                        <input type="text" class="input-text" name="class" placeholder="Your class ie. Six">
                     </td>
                  </tr>
                  <tr>
                     <td>Section : </td>
                     <td>
                        <input type="text" class="input-text" name="section" placeholder="Your section ie. D">
                     </td>
                  </tr>
                  <tr>
                     <td>Father's Name : </td>
                     <td>
                        <input type="text" class="input-text" name="fname" placeholder="Father's name">
                     </td>
                  </tr>
                  <tr>
                     <td>Father's Occupation : </td>
                     <td>
                        <input type="text" class="input-text" name="foccupation" placeholder="Father's occupation">
                     </td>
                  </tr>
                  <tr>
                     <td>Mother's Name : </td>
                     <td>
                        <input type="text" class="input-text" name="mname" placeholder="Mother's name">
                     </td>
                  </tr>
                  <tr>
                     <td>Mother's Occupation : </td>
                     <td>
                        <input type="text" class="input-text" name="moccupation" placeholder="Mother's occupation">
                     </td>
                  </tr>
                  <tr>
                     <td>Present Address : </td>
                     <td>
                        <input type="text" class="input-text" name="preaddress" placeholder="Present address">
                     </td>
                  </tr>
                  <tr>
                     <td>Permanent Address : </td>
                     <td>
                        <input type="text" class="input-text" name="peraddress" placeholder="Permanent address">
                     </td>
                  </tr>
                  <tr>
                     <td>Religion : </td>
                     <td>
                        <input type="text" class="input-text" name="religion" placeholder="Religion">
                     </td>
                  </tr>
                  <tr>
                     <td>Parent's Phone No. : </td>
                     <td>
                        <input type="text" class="input-text" name="phoneno" placeholder="Parent's phone number">
                     </td>
                  </tr>
                  <tr>
                     <td>Date of birth : </td>
                     <td>
                        <input type="text" class="input-text" name="dob" placeholder="YYYY-MM-DD">
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2">
                        <a href="#"><input type="submit" name="submit" value="Save & Submit" class="reg-btn"></a>
                        <a href="logout.php" class="reg-btn">logout</a>

                     </td>
                  </tr>
               </table>

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


<!-- PHP STARTS HERE -->
<?php


$conn = mysqli_connect('localhost', 'root', '', 'project2') or die(mysqli_error()); //database connection



if(isset($_POST['submit']))
{
   //to get the data from front-end

   $ID = $_POST['ID'];
   $full_name = $_POST['full_name'];
   $class = $_POST['class'];
   $section = $_POST['section'];
   $father_name = $_POST['fname'];
   $father_occupation = $_POST['foccupation'];
   $mother_name = $_POST['mname'];
   $mother_occupation = $_POST['moccupation'];
   $present_address = $_POST['preaddress'];
   $permanent_address = $_POST['peraddress'];
   $religion = $_POST['religion'];
   $phone_no = $_POST['phoneno'];
   $date_of_birth = $_POST['dob'];

   //sql query to store the data in database

   $sql = "SELECT * FROM register_table WHERE ID='$ID'";
   $result = mysqli_query($conn, $sql);

        //Execute query and store data in database

        if ($result->num_rows > 0) {
            $sql = "INSERT INTO info_tablee(ID, full_name, class, section, father_name, father_occupation, mother_name, mother_occupation, present_address, permanent_address, religion, phone_no, date_of_birth)
                    VALUES ('$ID', '$full_name', '$class', '$section', '$father_name', '$father_occupation', '$mother_name', '$mother_occupation', '$present_address', '$permanent_address', '$religion','$phone_no', '$date_of_birth' )";
			   $result = mysqli_query($conn, $sql);

         if ($result) {

				echo "<script>alert('Wow! User Information Inserted.')</script>";

				$ID = "";
            $full_name = "";
            $class = "";
            $section = "";
            $father_name = "";
            $father_occupation = "";
            $mother_name = "";
            $mother_occupation = "";
            $present_address = "";
            $permanent_address = "";
            $religion = "";
            $phone_no = "";
            $date_of_birth = "";
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

