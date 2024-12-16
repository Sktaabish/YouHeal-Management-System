<!-- SEESION-START -->
<?php
include 'config.php';
session_start();
$email = $_SESSION['user_email'];
if (!isset($email)) {
  header('location:login.php');
}
?>

<!-- HEADER -->
<?php
include('include/header.php');
?>

<?php

include("config.php");
if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $amount = $_POST['total'];
  if ($phone < 11) {
    $message[] = 'Phone No Must be 10-digit';
  } else {
    $sql = "INSERT INTO donate (name, email, phone ,amount) VALUES ('$name','$email','$phone', '$amount')";
    mysqli_query(mysql: $conn, query: $sql);
  }
}

?>

<!-- DONATE1_WRAPPER -->
<div class="donate1_wrapper">
  <!-- CONTAINER -->
  <div class="container">
    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />
    <!-- FORM -->
    <div class="form">
      <!-- CONTACT-INFO -->
      <div class="contact-info">
        <h3 class="title">Donate to our Hospital.</h3>
        <p class="text">
          Donating to our hospital will help provide medical care and support to those who cannot afford it.
          Your contribution, no matter how small, can make a difference in the lives of the less fortunate in our
          community. Join us in our mission to improve access to healthcare for all.
        </p>
        <!-- INFO -->
        <div class="info">
          <!-- INFORMATION -->
          <div class="information">
            <img src="img/location.png" class="icon" alt="" />
            <p>101, A-Wing, Near Jamtara Hotel</p>
          </div>
          <!-- INFORMATION -->
          <div class="information">
            <img src="img/email.png" class="icon" alt="" />
            <p>enquiry@youhealhospital.com</p>
          </div>
          <!-- INFORMATION -->
          <div class="information">
            <img src="img/phone.png" class="icon" alt="" />
            <p>969-969-9696</p>
          </div>
        </div>
        <!-- SOCIAL-MEDIA -->
        <div class="social-media">
          <p>Connect with us :</p>
          <!-- SOCIAL-ICONS -->
          <div class="social-icons">
            <a href="https://www.facebook.com/">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.twitter.com/">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- CONTACT-FORM -->
      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>
        <!-- FORM -->
        <form method="GET" action="pay.php">
          <h3 class="title">Donate here</h3>
          <!-- INPUT-CONTAINER -->
          <div class="input-container">
            <input type="text" name="name" placeholder="Name" class="input" required />
          </div>
          <!-- INPUT-CONTAINER -->
          <div class="input-container">
            <input type="email" name="email" placeholder="Email" class="input" required />
          </div>
          <!-- INPUT-CONTAINER -->
          <div class="input-container">
            <input type="number" name="phone" placeholder="Phone" class="input" required />
          </div>
          <!-- INPUT-CONTAINER -->
          <div class="input-container textarea">
            <input name="total" type="number" class="input" placeholder="Amount"></input>
          </div>
          <!-- ICON -->
          <div class="icon1">
            <p><i class="fas fa-light fa-indian-rupee-sign" style="color: #fff;"></i></p>
          </div>
          <!-- BUTTON -->
          <button type="submit" formaction="payment.php"name="submit" class="btn">Payment</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- SCRIPT -->
<?php
include('include/script.php');
?>