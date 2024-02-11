<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "icecreamshop";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET["it_id"])){
    $it_id = $_GET['it_id'];
    $sql = "SELECT * FROM item WHERE it_id = $it_id";
    $query = $conn->query($sql);
    $data = mysqli_fetch_assoc($query);

    $it_name = isset($data["it_name"]) ? $data["it_name"] : "";
    $it_date = isset($data["it_date"]) ? $data["it_date"] : "";
    $it_ti=isset($data["it_ti"])? $data["it_ti"] : "";
    $it_im=isset($data["it_im"])? $data["it_im"] : "";
    $it_des=isset($data["it_des"])? $data["it_des"] : "";
    $it_pr=isset($data["it_pr"])? $data["it_pr"] : "";
    $it_ac=isset($data["it_ac"])? $data["it_ac"] : "";
}

// if(isset($_GET['it_name'])){
//     $new_it_id = $_GET["it_id"];
//     $new_it_name = $_GET["it_name"];
//     $new_it_date = $_GET["it_date"];
//     $new_it_des=$_GET["it_des"];
//     $new_it_pr=$_GET["it_pr"];
//     $new_it_ti=$_GET["it_ti"];
//     $new_it_ac=$_GET["it_ac"];
//     $new_it_im=$_GET["it_im"];
    

//     $sql = "UPDATE item SET 
//     it_name = '$new_it_name',
//     it_date = '$new_it_date',
//     it_ti = '$new_it_ti',
//     it_des = '$new_it_des',
//     it_pr = '$new_it_pr',
//     it_ac = '$new_it_ac',
//     it_im = '$new_it_im'
// WHERE 
//     it_id = $new_it_id";

//     if ($conn->query($sql) === TRUE) {
//         echo "Update successfully";
//     } else {
//         echo "Not Updated !!";
//     }
// }
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Icecream Shop</title>
    <link rel="stylesheet" href="../Dashborad/Dasss.css">
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

        <div>
          
<div class="card ">
  <div class="card-header">
    <div class="text-header">EDIT A ICECREAM</div>
  </div>
  <div class="card-body">
  <form action="DasUpd.php" method="get">

      <div class="flex flex-row gap-6 pb-4 ">
      <div class="form-group w-[500px] shadow-md">
        <label for="text">Item Name:</label>
        <input required="" class="form-control" name="it_name" value="<?php echo $it_name ?>" type="text">
      </div>
      <div class="form-group w-[500px] shadow-md">
        <label for="text">Item Title:</label>
        <input required="" class="form-control" name="it_ti" value="<?php echo $it_ti ?>" id="password" type="text">
      </div>
      </div>

      <div class="flex flex-row gap-6 pb-4">
      <div class="form-group w-[500px] shadow-md">
        <label for="text">Item Price:</label>
        <input required="" class="form-control" name="it_pr" value="<?php echo $it_pr ?>" id="password" type="number">
      </div>
      <div class="form-group w-[500px] shadow-md">
        <label for="date">Date:</label>
        <input type="date" required="" class="form-control"  value="<?php echo $it_date ?>" name="it_date" id="password" >
      </div>
      </div>
      
   <div class="flex flex-row gap-6 pb-4">
      
   <div class="form-group shadow-lg  w-[500px]  " >
        <label for="text">Image:</label>
        <input required="" class="form-control" name="it_im" value="<?php echo $it_im ?>" id="confirm-password" type="text">
      </div>
      
      <div class="form-group  w-[500px] shadow-md ">
        <label for="text">Category:</label>
        <input required="" class="form-control" name="it_ac" value="<?php echo $it_ac ?>" id="confirm-password" type="text">
      </div>
   </div>
      

      <div class="form-group shadow-lg h-[80px] ">
        <label for="text">Describtion:</label>
        <input required="" class="form-control" name="it_des" value="<?php echo $it_des ?>" id="confirm-password" type="text">
      </div>
      

<div class="justify-center flex  pt-6 ">
<input class="btn bg-red-500 text-white" type="submit" value="Update">
<input type="text" name="it_id" value="<?php echo $it_id ?>" hidden >
</div>
  
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
