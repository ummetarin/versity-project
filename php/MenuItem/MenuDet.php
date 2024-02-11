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
$username = "root";
$password = "";
$dbname = "icecreamshop";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// app_id
// app_name
// app_im
// app_ac
// app_pr
// app_ti
// approved
// app_des
// app_date


if(isset($_GET["app_id"])){
    $app_id = $_GET['app_id'];
    $sql = "SELECT * FROM app_item WHERE app_id = $app_id";
    $query = $conn->query($sql);
    $data = mysqli_fetch_assoc($query);

    $app_name = isset($data["app_name"]) ? $data["app_name"] : "";
    $app_date = isset($data["app_date"]) ? $data["app_date"] : "";
    $app_ti=isset($data["app_ti"])? $data["app_ti"] : "";
    $app_im=isset($data["app_im"])? $data["app_im"] : "";
    $app_des=isset($data["app_des"])? $data["app_des"] : "";
    $app_pr=isset($data["app_pr"])? $data["app_pr"] : "";
    $app_ac=isset($data["app_ac"])? $data["app_ac"] : "";
   
}

 ?>


<?php
    include '/xampp/htdocs/Ice/php/NavFot/Nav.php';

    ?>

<div class="flex md:flex-row flex-col gap-24 justify-center py-12 shadow-md items-center">
    
   <div>
     
    <img class="w-[500px] h-[500px]" src="<?php echo $app_im ?>" alt="">

   </div>
   <div class="ml-5 w-[500px]">
  <div class="flex flex-row ">
  
   <h1 class="font-bold text-orange-950 text-4xl  pb-6"><?php echo $app_name?></h1>
   <img class="w-12 h-12" src="https://i.ibb.co/JqtGM72/2c6f6e502f01194d48616415eeec1eda.jpg" alt="">
  </div>
  <h1 class="text-2xl font-medium t text-yellow-900 pt-3 pb-2"><?php echo $app_ti ?></h1>
  <h1 class="text-xl font-medium text-amber-900 pb-2"><?php echo $app_ac ?></h1>


   <h1 class="text-sm font-medium text-orange-700 pb-6"><?php echo $app_des ?></h1>
   <div class="flex flex-row items-center pb-6">
   
  
   <h1 class="text-xl font-bold ">$<?php echo $app_pr ?></h1>
   </div>
  
   

   <button class="font-bold w-[100px]  h-[50px] rounded-lg bg-orange-950 text-white"><a href="../Order/OrderFrom.php?app_id=<?php echo $app_id  ?>">Order Now</a></button>

   </div>
  

</div>

<?php
include "/xampp/htdocs/Ice/php/NavFot/Foot.php"

?>