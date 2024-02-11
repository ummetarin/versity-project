<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Icecream Shop</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<?php
	$hostname = "localhost";
	$username   = "root";
	$password   = "";
	$dbname     = "icecreamshop";

	$conn = new mysqli($hostname, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
	// echo "Connected successfully";

?>


<?php

if(isset($_GET['it_id'])){
    $new_it_id = $_GET["it_id"];
    $new_it_name = $_GET["it_name"];
    $new_it_date = $_GET["it_date"];
    $new_it_des=$_GET["it_des"];
    $new_it_pr=$_GET["it_pr"];
    $new_it_ti=$_GET["it_ti"];
    $new_it_ac=$_GET["it_ac"];
    $new_it_im=$_GET["it_im"];
    

    $sql = "UPDATE item SET 
    it_name = '$new_it_name',
    it_date = '$new_it_date',
    it_ti = '$new_it_ti',
    it_des = '$new_it_des',
    it_pr = '$new_it_pr',
    it_ac = '$new_it_ac',
    it_im = '$new_it_im'
WHERE 
    it_id = $new_it_id";

    if ($conn->query($sql) === TRUE) {
        echo "Update successfully";
    } else {
        echo "Not Updated !!";
    }
}



?>

