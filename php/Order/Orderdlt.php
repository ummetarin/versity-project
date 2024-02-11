
<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "icecreamshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the it_id parameter is set in the URL
if(isset($_GET["or_id"])) {
    $or_id = $_GET['or_id'];
    
    // SQL to delete the item with the given it_id
    $sql = "DELETE FROM orderitem WHERE or_id = $or_id";

    if (mysqli_query($conn, $sql)) {
        echo "Item deleted successfully";
    } else {
        echo "Error deleting item: " . mysqli_error($conn);
    }
} else {
    echo "Item ID not provided";
}

// Close the database connection
mysqli_close($conn);
?>
