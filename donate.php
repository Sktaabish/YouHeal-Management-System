<!-- SEESION-START -->
<?php
include 'config.php';
session_start();
$email = $_SESSION['user_email'];
if (!isset($email)) {
  header(header: 'location:login.php');
}
?>

<!-- HEADER -->
<?php
include('include/header.php');
?>

<!-- DONATE_WRAPPER -->
<div class="donate_wrapper">
    <!-- CONTAINER -->
    <div class="container">
        <!-- BOX -->
        <div class="box">
            <!-- IMAGE -->
            <div class="image">
                <img src="images/donate1.png" alt="children image">
            </div>
            <!-- HEADING -->
            <div class="heading">
                <p class="topic">Orphanage Donation</p>
                <p class="msg">Your donation can bring a smile to ther faces help then build a brighter future.</p>
            </div>
            <!-- INPUT-CONTAINER -->
            <form class="input-cont" method="GET" action="pay.php">
                <!-- INPUT-GROUP -->
                <div class="input-group">
                    <label>Name </label>
                    <input name="name" type="text" placeholder="Enter Your Name" required>
                </div>
                <!-- INPUT_GROUP -->
                <div class="input-group">
                    <label>Email</label>
                    <input name="email" type="email" placeholder="Enter Your Email" required>
                </div>
                <!-- INPUT-GROUP -->
                <div class="input-group">
                    <label>Phone</label>
                    <input name="phone" type="number" placeholder="Enter Phone Number" required>
                </div>
                <!-- INPUT-GROUP -->
                <div class="input-group">
                    <label>Amount</label>
                    <input name="total" type="number" placeholder="Enter Amount" required>
                    <div class="icon1">
                        <p><i class="fas fa-light fa-indian-rupee-sign" style="color: #000;"></i></p>
                    </div>
                </div>
                <!-- BUTTON -->
                <div class="button">
                    <div class="btn">
                        <button formaction="payment.php" type="submit" class="btn-design">Payment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- SCRIPT -->
<?php
include('include/script.php');
?>