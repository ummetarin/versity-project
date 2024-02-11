<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "icecreamshop";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET["it_name"])) {
    $it_name = $_GET["it_name"];
    $it_im = $_GET["it_im"];
    $it_date = $_GET["it_date"];
    $it_des = $_GET["it_des"];
    $it_ti = $_GET["it_ti"];
    $it_pr = $_GET["it_pr"];
    $it_ac = $_GET["it_ac"];

    // Prepare and bind SQL statement to prevent SQL injection
    $sql = "INSERT INTO item (it_name, it_im, it_date, it_des, it_ti, it_pr, it_ac) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssis", $it_name, $it_im, $it_date, $it_des, $it_ti, $it_pr, $it_ac);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Icecream Shop</title>
    <link rel="stylesheet" href="./Dasss.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


<div class="flex flex-row">
<div class="w-[200px] min-h-screen b bg-gray-800 text-white  flex flex-col">
   <div>
    <h1 class="text-center font-bold pt-12">ADMIN DASHBOARD</h1>
   </div>
   <?php
    include '../NavFot/Dash.php'
  ?>
  
</div>
<!-- .. -->





<div class="card ">
  <div class="card-header">
    <div class="text-header">ADD A ICECREAM</div>
  </div>
  <div class="card-body">
  <form action="DasAdd.php" method="get">

      <div class="flex flex-row gap-6 pb-4 ">
      <div class="form-group w-[500px] shadow-md">
        <label for="text">Item Name:</label>
        <input required="" class="form-control" name="it_name" id="password" type="text">
      </div>
      <div class="form-group w-[500px] shadow-md">
        <label for="text">Item Title:</label>
        <input required="" class="form-control" name="it_ti" id="password" type="text">
      </div>
      </div>

      <div class="flex flex-row gap-6 pb-4">
      <div class="form-group w-[500px] shadow-md">
        <label for="text">Item Price:</label>
        <input required="" class="form-control" name="it_pr" id="password" type="number">
      </div>
      <div class="form-group w-[500px] shadow-md">
        <label for="date">Date:</label>
        <input type="date" required="" class="form-control" name="it_date" id="password" >
      </div>
      </div>
      
   <div class="flex flex-row gap-6 pb-4">
      
   <div class="form-group shadow-lg  w-[500px]  " >
        <label for="text">Image:</label>
        <input required="" class="form-control" name="it_im" id="confirm-password" type="text">
      </div>
      
      <div class="form-group  w-[500px] shadow-md ">
        <label for="text">Category:</label>
        <input required="" class="form-control" name="it_ac" id="confirm-password" type="text">
      </div>
   </div>
      

      <div class="form-group shadow-lg h-[80px] ">
        <label for="text">Describtion:</label>
        <input required="" class="form-control" name="it_des" id="confirm-password" type="text">
      </div>
      

<div class="justify-center flex  pt-6 ">
<input type="submit" class="btn bg-pink-500 text-white" value="Add Product">    </form>
</div>
    
  </div>
</div>



</div>





