<!-- HEADER -->
<?php
include('include/header.php');
?>

<!-- RELOAD_WRAPPER -->
<div class="reload_wrapper">
    <!-- CONTAINER -->
    <div class="container">
        <!-- HEADINH -->
        <div class="heading">
            <h2 class="msg">Payment Processing...</h2>
            <p class="msg1">Thank you for choosing our payment processing service.</p>
            <p class="msg1">Please wait for a moment while we process your payment and ensure that everything is in
                order.
            </p>
            <!-- SECONDS-DISPLAY -->
            <div id="secondsdisplay"></div>
            <!-- PRLOADER -->
            <div class="preloader">
                <img class="reload" src="images/preloader.gif" alt="preloader">
            </div>
        </div>
    </div>
</div>

<!-- SCRIPT -->
<script src="reload.js"></script>
<?php
include('include/script.php');
?>