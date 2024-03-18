
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "icecreamshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET["or_id"])) {
    $or_id = $_GET['or_id'];
    
 
    $sql = "DELETE FROM orderitem WHERE or_id = $or_id";

    if (mysqli_query($conn, $sql)) {
        echo "Item deleted successfully";
    } else {
        echo "Error deleting item: " . mysqli_error($conn);
    }
} else {
    echo "Item ID not provided";
}


mysqli_close($conn);
?>
