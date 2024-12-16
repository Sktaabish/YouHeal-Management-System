<!-- HEADER -->
<?php
include('include/header.php');
?>

<!-- DELETE1_WRAPPER -->
<div class="delete1_wrapper">
    <div class="container">
        <!-- BACK-BUTTON -->
        <div class="back">
            <a href="admin.php"><button>Back To Admin Page<br></button></a>
            <div class="icons">
                <a href="admin.php"><ion-icon name="arrow-back-outline"></ion-icon></a>
            </div>
        </div>


        <?php include("config.php");
        $id = $_GET['id'];

        $query = "DELETE FROM register WHERE id ='$id'";
        $data = mysqli_query($conn, $query);
        if ($data) {
            echo '<h1 class="h1"> Record Deleted<br>Thanks!<br>YouHeal</h1>';
        } else {
            echo '<h1 class="h1">Record not found<br>YouHeal!</h1>';
        }

        ?>
    </div>
</div>

<!-- SCRIPT -->
<?php
include('include/script.php');
?>