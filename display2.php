<!-- HEADER -->
<?php
include('include/header.php');
?>

<!-- BACK-END -->
<?php
include("config.php");
error_reporting(0);
$query = "SELECT * FROM contact";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if ($total != 0) {
    ?>
    <!-- DISPLAY2_WRAPPER -->
    <div class="display2_wrapper">
        <h1 class="record" align="center">Contact Records</h1>
        <center>
            <table border="1" cellspacing="15" width="75%">
                <tr>
                    <th width="2%">ID</th>
                    <th width="6%">First Name</th>
                    <th width="6%">Last Name</th>
                    <th width="6%">Email</th>
                    <th width="6%">Password</th>
                    <th width="6%">Confirm Password</th>
                    <th width="6%">Age</th>
                    <th width="6%">Phone No</th>
                    <th width="6%">Type</th>
                    <th width="6%">Operation</th>
                </tr>

                <?php
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>
                    <td>" . $result['id'] . "</td>
                    <td>" . $result['firstname'] . "</td>
                    <td>" . $result['lastname'] . "</td>
                    <td>" . $result['email'] . "</td>
                    <td>" . $result['password'] . "</td>
                    <td>" . $result['confirm'] . "</td>
                    <td>" . $result['age'] . "</td>
                    <td>" . $result['phoneno'] . "</td>
                    <td>" . $result['type'] . "</td>
                    <td><a href='delete2.php?id=$result[id]'><input type='submit'
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