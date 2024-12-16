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


<!-- ADMIN_WRAPPER -->
<div class="admin_wrapper">
    <!-- CONTAINER -->
    <div class="container">
        <!-- SIDE -->
        <div class="side">
            <!-- NAME -->
            <div class="name">
                <a href="admin.php">
                    <p class="p1">You Heal</p>
                </a>
            </div>
            <!-- LOGO -->
            <div class="logo">
                <a href="admin.php"><img src="images/logo.png" alt="LOGO"></a>
            </div>
            <!-- DASH -->
            <div class="dash">
                <!-- BUTTON -->
                <div class="button">
                    <button id="dash-page">Dashboard</button>
                </div>
                <!-- ICON -->
                <div class="icon">
                    <p class="p2"><ion-icon name="reader-outline"></ion-icon></p>
                </div>
            </div>
            <!-- REGIST -->
            <div class="regist">
                <!-- BUTTON -->
                <div class="button1">
                    <!-- BUTTON-DESIGN -->
                    <div class="btn1">
                        <button id="regist-page" class="btn-design1">Registered</button>
                    </div>
                </div>
            </div>
            <!-- APPOINT -->
            <div class="appoint">
                <!-- BUTTON -->
                <div class="button2">
                    <!-- BUTTON-DESIGN -->
                    <div class="btn2">
                        <button id="appoint-page" class="btn-design2">Appointment</button>
                    </div>
                </div>
            </div>
             <!-- CONTACT -->
             <div class="contact">
                <!-- BUTTON -->
                <div class="button3">
                    <!-- BUTTON-DESIGN -->
                    <div class="btn3">
                        <button id="contact-page" class="btn-design3">Contact</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="wel" class="welcome">
            <p class="wel">Welcome To Admin Page</p>
        </div>
        <!-- CONTENT-->
        <div id="content"></div>
    </div>
</div>

<!-- SCRIPT -->
<?php
include('include/script.php');
?>