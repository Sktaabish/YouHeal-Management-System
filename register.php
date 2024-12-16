<!-- HEADER -->
<?php
include('include/header.php');
?>

<!-- BACK-END -->
<?php
session_start();

include("config.php");
if (isset($_POST["submit"])&& isset($_POST['type'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = md5(string: $_POST['password']);
    $confirm = md5(string: $_POST['confirm']);
    $age = $_POST['age'];
    $phoneNo = $_POST['phoneNo'];
    $type = $_POST['type'];
    $error = array();
    if (strlen(string: $password) < 8) {
        array_push(array: $error, values: "<div class='form-body'>Password Must be 8 Character Long</div>");
    }
    if ($password != $confirm) {
        array_push(array: $error, values: "<div class='form-body'>Password Does Not Match</div>");
    }
    if (count(value: $error) > 0) {
        foreach ($error as $error) {
            echo "<div class='form-body'>$error</div>";
        }
    } else {
        $sq = "SELECT * FROM register WHERE email = '$email'";
        $result = mysqli_query(mysql: $conn, query: $sq);
        $num = mysqli_num_rows(result: $result);
        if ($num == 1) {
            echo "<div class='form-body'>Duplicate Data</div>";
        } else {
            $sql = "INSERT INTO register (firstname, lastname, email, password, confirm, age, phoneno ,type) VALUES ('$firstName','$lastName','$email','$password','$confirm','$age', '$phoneNo', '$type')";
            mysqli_query(mysql: $conn, query: $sql);
            echo "<div class='form-body'>Register Successfully</div>";
        }
    }
}
?>

<!-- REGISTER_WRAPPER -->
<div class="register_wrapper">
    <!-- CONTAINER -->
    <div class="container">
        <!-- SECTION -->
        <section id="registration-page">
            <!-- SIGNUP-FORM -->
            <form class="signup-form" method="POST" action="register.php">
                <!-- FORM-HEADER -->
                <div class="form-header">
                    <h1>REGISTRATION</h1>
                </div>
                <!-- FORM-BODY -->
                <div class="form-body">
                    <!-- ROW -->
                    <div class="row">
                        <!-- INPUT-GROUP -->
                        <div class="input-group">
                            <label>First name </label>
                            <input name="firstName" type="text" placeholder="Enter Your First Name" required>
                        </div>
                        <!-- INPUT_GROUP -->
                        <div class="input-group">
                            <label>Last name</label>
                            <input name="lastName" type="text" placeholder="Enter Your Last Name" required>
                        </div>
                    </div>
                    <!-- ROW -->
                    <div class="row">
                        <!-- INPUT-GROUP -->
                        <div class="input-group">
                            <label>Email </label>
                            <input name="email" type="email" placeholder="Enter Your Email" required>
                        </div>
                    </div>
                    <!-- ROW -->
                    <div class="row">
                        <!-- INPUT-GROUP -->
                        <div class="input-group">
                            <label>Password </label>
                            <input name="password" type="password" placeholder="Enter Your Password" required>
                        </div>
                        <!-- INPUT-GROUP -->
                        <div class="input-group">
                            <label>Confirm Password</label>
                            <input name="confirm" type="password" placeholder="Enter Your password Again" required>
                        </div>
                    </div>
                    <!-- ROW -->
                    <div class="row">
                        <!-- INPUT-GROUP -->
                        <div class="input-group">
                            <label>Age</label>
                            <input type="hidden" name="type" value="user" >
                            <input name="age" type="number" placeholder="Enter Your Age" required>
                        </div>
                        <div class="input-group">
                            <label>Phone No</label>
                            <input name="phoneNo" type="number" placeholder="Enter Your Phone No" required>
                        </div>
                    </div>
                    <div class="log">
                        <P>Have Already an account? <a href="login.php">Login Here</a></P>
                    </div>
                    <!-- FORM-FOOTER -->
                    <div class="form-footer">
                        <button class="btn" type="submit" name="submit" formaction="register.php">Create</button>
                    </div>
                </div>
            </form>

            <!-- BACK-BUTTON -->
            <div class="back">
                <a href="index.php"><button>Back To Home Page<br></button></a>
                <div class="icons">
                    <a href="index.php"><span class="icon"><ion-icon name="arrow-forward-outline"></span></ion-icon></a>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
include('include/script.php');
?>