<?php
include 'config.php';
session_start();
$email=$_SESSION['user_email'];
if(!isset($email)){
  header('location:login.php');
}
?>

<?php

include("config.php");
if (isset($_POST["send"])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO contact (name, email, message) VALUES ('$name','$email', '$message')";
  mysqli_query($conn, $sql);
  echo "Thank You For Contacting";
}
?>


<!-- HEADRER -->
<?php include('include/header.php') ?>
<!-- CONTACT_WRAPPER -->
<div class="contact_wrapper">
  <!-- CONTAINER -->
  <div class="container">
    <!-- TOP -->
    <div class="top">
      <!-- DETAILS -->
      <div class="details">
        Contact Us +91 96366 96366 | enquiry@youhealhospital.com
        <div>
          <button class="open_btn"><i class="fa-solid fa-bars"></i></button>
          CONTACT
        </div>
        <!-- LOGO -->
        <div class="logo1">
          <img src="images/logo.png" alt="LOGO">
        </div>
      </div>
    </div>
    <!-- NAVIGATION -->
    <div class="nav">
      <button class="close_btn"><i class="fa-solid fa-xmark"></i></button>
      <div>
        <a href="logout.php">LOGOUT</a>
        <a href="home.php">HOME</a>
        <a href="about2.php">ABOUT US</a>
        <a href="service.php">SERVICE</a>
        <a href="contact2.php">CONTACT</a>
      </div>
    </div>
    <!-- CONTAINER3 -->
    <div class="container3">
      <!-- MAP -->
      <div class="Map">
        <h2>Reach at You Heal</h2>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.814242564724!2d72.83880131429895!3d19.203314052949857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b77628790dd3%3A0x9213225447c7959e!2sDr.%20Aishwarya&#39;s%20YouHeal%20Homoeopathy!5e0!3m2!1sen!2sin!4v1676567179756!5m2!1sen!2sin"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <!-- CONTAINER1 -->
      <div class="container1">
        <!-- CONTENT -->
        <div class="content">
          <!-- RIGHT-SIDE -->
          <div class="right-side">
            <!-- TOPIC-TEXT -->
            <div class="topic-text">REACH OUT HERE!</div>
            <p>
              If you have any work from me or any types of quries related to my
              tutorial, you can send me message from here. It's my pleasure to
              help you.
            </p>
            <form method="post" action="contact2.php">
              <!-- INPUT-BOX -->
              <div class="input-box">
                <input name="name" type="text" placeholder="Enter your name" required />
              </div>
              <!-- INPUT-BOX -->
              <div class="input-box">
                <input name="email" type="text" placeholder="Enter your email" required />
              </div>
              <!-- INPUT-BOX -->
              <div class="input-box">
                <input name="message" class="messgae" type="text" placeholder="Enquiry" required />
              </div>
              <!-- BUTTON -->
              <div class="bttn">
                <button class="btn" type="submit" name="send" >Send Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FOOTER -->
<?php
include('include/footer2.php');
?>