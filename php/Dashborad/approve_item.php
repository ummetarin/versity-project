<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "icecreamshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET["it_id"]) && isset($_GET["approve"])) {
    $it_id = $_GET['it_id'];

    // Retrieve item details based on it_id
    $sql_select = "SELECT * FROM item WHERE it_id = $it_id";
    $result = mysqli_query($conn, $sql_select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $app_name = $row['it_name'];
        // Assuming other columns are similar to the item table, adjust accordingly

        // Update approval status in the app_item table
        $sql = "INSERT INTO app_item (app_id, app_name, app_ac, app_pr, app_ti, app_des, app_im, app_date, approved) 
                VALUES ('$it_id', '$app_name', '$row[it_ac]', '$row[it_pr]', '$row[it_ti]', '$row[it_des]', '$row[it_im]', '$row[it_date]', 1) 
                ON DUPLICATE KEY UPDATE approved = VALUES(approved)";

        if (mysqli_query($conn, $sql)) {
            echo "Item approved successfully";
        } else {
            echo "Error updating approval status: " . mysqli_error($conn);
        }
    } else {
        echo "No item found with the provided ID";
    }
} else {
    echo "Item ID not provided or approval action not specified";
}

mysqli_close($conn);
?>
