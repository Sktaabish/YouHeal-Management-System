<!-- HEADER -->
<?php
include('include/header.php');
?>

<!-- BACK-END -->
<?php
include("config.php");
error_reporting(error_level: 0);
$query = "SELECT * FROM register WHERE TYPE!='admin'";
$data = mysqli_query(mysql: $conn, query: $query);

$total = mysqli_num_rows(result: $data);

$query2 = "SELECT * FROM register WHERE TYPE ='admin'";
$data2 = mysqli_query(mysql: $conn, query: $query2);

$total2 = mysqli_num_rows(result: $data2);

$query1 = "SELECT * FROM appointment";
$data1 = mysqli_query(mysql: $conn, query: $query1);

$total1 = mysqli_num_rows(result: $data1);

$query3 = "SELECT * FROM contact";
$data3 = mysqli_query(mysql: $conn, query: $query3);

$total3 = mysqli_num_rows(result: $data3);
?>

<!-- DASH_WRAPPER -->
<div class="dash_wrapper">
    <!-- CONTAINER -->
    <div class="container">
        <!-- WISHES -->
        <div class="wishes">
            <p class="p">Dashboard</p>
        </div>
        <!-- MAIN -->
        <div class="main">
            <!-- REGIST -->
            <div class="regist">
                <!-- REGISTID_WRAPPER -->
                <div class="registid_wrapper">
                    <!-- TOPIC -->
                    <div class="topic">
                        <!--HEAD -->
                        <div class="head">
                            <p>Total No.Of Users</p>
                            <p class="total" ><?php echo $total ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- APPOINT -->
            <div class="appoint">
                <!-- APPOINTID_WRAPPER -->
                <div class="aapointid_wrapper">
                    <!-- TOPIC -->
                    <div class="topic">
                        <!-- HEAD -->
                        <div class="head">
                            <p>Total No.Of Appointment</p>
                            <p class="total" ><?php echo $total1 ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ADMIN -->
            <div class="admin">
                <!-- ADMINID_WRAPPER -->
                <div class="adminid_wrapper">
                    <!-- TOPIC -->
                    <div class="topic">
                        <!-- HEAD -->
                        <div class="head">
                            <p>Total No.Of Admin</p>
                            <p class="total" ><?php echo $total2 ?></p>
                        </div>
                    </div>
                </div>
            </div>
             <!-- CONTACT -->
            <div class="contact">
                <!-- CONTACTID_WRAPPER -->
                <div class="contactid_wrapper">
                    <!-- TOPIC -->
                    <div class="topic">
                        <!-- HEAD -->
                        <div class="head">
                            <p>Total No.Of Contact</p>
                            <p class="total" ><?php echo $total3 ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPT -->
<?php
include('include/script.php');
?>