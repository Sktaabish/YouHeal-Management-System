<!-- HEADER -->
<?php
include('include/header.php');
?>

<!-- BACK-END -->
<?php
include("config.php");
error_reporting(0);
$query = "SELECT * FROM appointment";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if ($total != 0) {
    ?>
    <!-- DISPLAY_WRAPPER -->
    <div class="display_wrapper">
        <h1 class="record" align="center">Appointment Records</h1>
        <center>
            <table border="1" cellspacing="15" width="75%">
                <tr>
                    <th width="1%">ID</th>
                    <th width="3%">NAME</th>
                    <th width="3%">CONTACT</th>
                    <th width="2%">DATE</th>
                    <th width="2%">TIME</th>
                    <th width="5%">AADHAR NO</th>
                    <th width="5%">DOCTOR</th>
                    <th width="1%">Operation</th>
                </tr>

                <?php
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>
                    <td>" . $result['id'] . "</td>
                    <td>" . $result['name'] . "</td>
                    <td>" . $result['phone'] . "</td>
                    <td>" . $result['date'] . "</td>
                    <td>" . $result['time'] . "</td>
                    <td>" . $result['adhaar'] . "</td>
                    <td>" . $result['doctor'] . "</td>
                    <td><a href='delete.php?id=$result[id]'><input type='submit'
                        value='Delete' class='delete'></a></td>
                    </tr>";
                }
} else {
    echo '<div class="sorry"><h2>Sorry! No data found</h2></div>';
}

?>
</div>
</table>
</center>

</html>