<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, md5($_POST['password']));

  $select_users = mysqli_query($conn, "SELECT * FROM `register` WHERE email = '$email' AND password = '$password'") or die('query failed');

  if (mysqli_num_rows($select_users) > 0) {

    $row = mysqli_fetch_assoc($select_users);
    if($row['type']=='admin'){

    $_SESSION['user_email'] = $row['email'];
    $_SESSION['user_passowrd'] = $row['password'];
    $_SESSION['user_id'] = $row['id'];
    header('location:admin.php');
    }
    else{
      $_SESSION['user_email'] = $row['email'];
      $_SESSION['user_passowrd'] = $row['password'];
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
    }



  } else {
    $message[] = 'incorrect email or password!';
  }
}

?>

<!-- HEADER -->
<?php include('include/header.php');
?>

<!-- LOGIN_WRAPPER -->
<div class="login_wrapper">
  <!-- CONTAINER -->
  <div class="container">
    <!-- LOGIN -->
    <div class="login">
      <form method="POST" action="login.php">

        <h1>Login</h1>
        <!-- CONTENT -->
        <div class="content">
          <!-- IPUT -->
          <div class="input">
            <input type="email" name="email" placeholder="EMAIL" autocomplete="nope" />
          </div>
          <!-- INPUT -->
          <div class="input">
            <input type="password" name="password" placeholder="PASSWORD" autocomplete="new-password" />
          </div>
          <div class="forget">
            <a href="#">Forget Your Password?</a>
          </div>
        </div>
        <?php
        if (isset($message)) {
          foreach ($message as $message) {
            echo '
            <div class="message" style="text-align: center; margin-bottom: 10px;">
           <span style="color:red; ">' . $message . '</span>
          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
          </div>';
          }
        }
        ?>
        <!-- ACTION-BUTTON -->
        <div class="action">
          <button name="submit" type="submit">SIGN IN</button>
          <button type="submit" formaction="register.php">REGISTER</button>
        </div>
      </form>
    </div>
    <!-- BACK-BUTTON -->
    <div class="back">
      <a href="index.php"><button>Back To Home Page<br></button></a>
      <div class="icons">
        <a href="index.php"><span class="icon"><ion-icon name="arrow-forward-outline"></span></ion-icon></a>
      </div>
    </div>
  </div>
</div>
<?php
include('include/script.php');
?>