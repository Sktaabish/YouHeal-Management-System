<!-- HEADER -->
<?php
include('include/header.php');
?>
<link rel="stylesheet" href="payment.css">
<!-- PAYMENT_WRAPPER -->
<div class="payment_wrapper">
    <!-- CONTAINER -->
    <div class="container">
        <!-- MAIN -->
        <div class="main">
            <!-- PAYMENT -->
            <form class="payment">
                <!-- ROW -->
                <div class="row">
                    <!-- COLUMN -->
                    <div class="column">
                        <h3 class="title">payment</h3>
                        <!-- INPUT-BOX -->
                        <div class="inputBox">
                            <span>cards accepted :</span>
                            <img src="images/card_img.png" alt="">
                        </div>
                        <!-- INPUT-BOX -->
                        <div class="inputBox">
                            <span>name on card :</span>
                            <input type="text" placeholder="mr. john deo" required>
                        </div>
                        <!-- INPUT-BOX -->
                        <div class="inputBox">
                            <span>credit card number :</span>
                            <input type="number" placeholder="1111-2222-3333-4444" required>
                        </div>
                        <!-- FLEX -->
                        <div class="flex">
                            <!-- INPUT-BOX -->
                            <div class="inputBox">
                                <span>exp month :</span>
                                <input type="text" placeholder="06" required>
                            </div>
                            <!-- INPUT-BOX -->
                            <div class="inputBox">
                                <span>exp year :</span>
                                <input type="number" placeholder="2022" required>
                            </div>
                            <!-- INPUT-BOX -->
                            <div class="inputBox">
                                <span>CVV :</span>
                                <input type="text" placeholder="123" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BUTTON -->
                <button type="submit" formaction="reload.php" class="submit-btn">DONATE</button>
            </form>
        </div>
    </div>
</div>

<!-- SCRIPT -->
<?php
include('include/script.php');
?>