<!-- BACK-END -->
<?php

session_start();

include("config.php");
if (isset($_POST["submit"])) {
    $Name = $_POST['name'];
    $Phone = $_POST['phone'];
    $Date = $_POST['date'];
    $Time = $_POST['time'];
    $Adhaar = $_POST['adhaar'];
    $doctor = $_POST['doctor'];
    $error = array();

    $sq = "SELECT * FROM appointment WHERE doctor = '$doctor' AND date = '$Date'";
    $result = mysqli_query($conn, $sq);
    $num = mysqli_num_rows($result);

    $sq1 = "SELECT * FROM appointment WHERE time = '$Time' AND doctor = '$doctor' AND date = '$Date'";
    $result1 = mysqli_query($conn, $sq1);
    $num1 = mysqli_num_rows($result1);
    
    $sq2 = "SELECT * FROM appointment WHERE phone = '$Phone' OR adhaar = '$Adhaar'";
    $result2 = mysqli_query($conn, $sq2);
    $num2 = mysqli_num_rows($result2);

    if (($Phone < 10)) {
        array_push($error, "Please Enter Valid Number");
    }
    if (($Adhaar < 12)) {
        array_push($error, "Please Enter Valid Adhaar Number");
    }
    if($num2 >=1 ){
        $message [] = 'Your Slot Already Booked';
    }
    
    elseif ($num >= 9) {
        $message[] = 'All Slot are Booked Try Tommorrow';

    } elseif ($num1 >= 1) {

        $message[] = 'Slot Not Available';


    } else {
        $sql = "INSERT INTO appointment (name, phone, date, time, adhaar, doctor) VALUES ('$Name','$Phone','$Date','$Time','$Adhaar','$doctor')";
        mysqli_query($conn, $sql);
        // echo "Booking Successfully";
        $message[] = 'Booking Successfully';
    }

}


?>

<!-- HEADER -->
<?php
include('include/header.php');
?>

<!-- APPOINT_WRAPPER -->
<div class="appoint_wrapper">
    <!-- CONTAINER -->
    <div class="container">
        <!-- SECTION -->
        <section id="appointment-page">
            <!-- FORM -->
            <form class="form" method="POST" action="appointment.php">
                <!-- FORM-HEADING -->
                <div class="form-heading">
                    <h1>Book Appointment</h1>
                </div>
                <!-- TEXT -->
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                </div>
                <!-- PHONE -->
                <div>
                    <label for="phone">Phone No</label>
                    <input type="number" name="phone" placeholder="Enter Your Phone No" required>
                </div>
                <!-- DATE -->
                <div>
                    <label for="date">Appointment Date</label>
                    <input type="date" name="date" min="<?PHP echo date('Y-m-d') ?>" required>

                </div>
                <!-- TIME -->
                <div class="dropdown">
                    <label for="time">Appointment Time</label>
                    <input readonly class="textbox" name="time" required>
                    <!-- <p class="icon1"><ion-icon name="time-outline"></ion-icon></p> -->
                    <div class="option">
                        <div class="main">
                            <div class="part">
                                <div class="time" onclick="show('09:00')" value="09:00">09:00</div>
                                <div class="time" onclick="show('09:20')">09:20</div>
                                <div class="time" onclick="show('09:40')">09:40</div>
                            </div>
                            <div class="part">
                                <div class="time" onclick="show('10:00')">10:00</div>
                                <div class="time" onclick="show('10:20')">10:20</div>
                                <div class="time" onclick="show('10:40')">10:40</div>
                            </div>
                            <div class="part">
                                <div class="time" onclick="show('11:00')">11:00</div>
                                <div class="time" onclick="show('11:20')">11:20</div>
                                <div class="time" onclick="show('11:40')">11:40</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ADHAAR -->
                <div>
                    <label for="adhaar">Aadhaar Number</label>
                    <input type="number" name="adhaar" placeholder="Enter Your Adhaar No" required>
                </div>
                <!-- DOCTOR -->
                <div class="docname">
                    <label for="doctor">Doctor Name 👨‍⚕️</label>
                    <select class="doctor" type="text" name="doctor" placeholder="Enter Your Adhaar No" required>
                        <option value="Kiran Acharya">KIRAN ACHARYA</option>
                        <option value="Sunil Agrawal">SUNIL AGRAWAL</option>
                        <option value="Bharat Patel">BHARAT PATEL</option>
                        <option value="Neha">NEHA SHAH</option>
                        <option value="Ram Tainwala">RAM TAINWALA</option>
                        <option value="Ritu Jain">RITU JAIN</option>
                        <option value="Samir Parikh">SAMIR PARIKH</option>
                        <option value="Varsha Hariyani">VARSHA HARIYANI</option>
                        <option value="Vishal Baldua">VISHAL BALDUA</option>
                        <option value="Ramesh Yadav">RAMESH YADAV</option>
                    </select>
                </div>

                <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '
                        <div class="message" style="text-align: center; margin-bottom: -13px;">
                        <span style="color:#000; ">' . $message . '</span>
                        </div>
                        ';
                    }
                }
                ?>
                <br><br>
                <!-- BUTTON -->
                <button class="btn" type="submit" name="submit" formaction="appointment.php">Book</button>
            </form>
        </section>
        <!-- BACK-BUTTON -->
        <div class="back">
            <a href="service.php"><button>Back To Service Page<br></button></a>
            <div class="icons">
                <a href="index.php"><span class="icon"><ion-icon name="arrow-forward-outline"></span></ion-icon></a>
            </div>
        </div>
    </div>
</div>
<?php
include('include/script.php');
?>