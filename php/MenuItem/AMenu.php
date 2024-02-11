<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "icecreamshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM 	app_item";
$query = mysqli_query($conn, $sql);

if (!$query) {
    die("Error fetching data: " . mysqli_error($conn));
}
?>


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
    <!-- navbar -->
    <?php
    include '/xampp/htdocs/Ice/php/NavFot/Nav.php';

    ?>
    <!-- banner -->
    <div>
        <img class="about h-[300px] w-full" src="https://i.ibb.co/T4FwYng/360-F-601191305-o7-Rw-Xk-QRHVo-Kug5ap0-Yhx-PZYpm-Bvx9-VV.jpg" alt="">
      </div>

      <!-- menus -->
  <h1 class="text-center font-bold text-pink-700 text-3xl pt-16 pb-3">All Items In Our Shop </h1>
  <p class="text-center text-sm px-24 font-medium pb-16 ">It typically includes details such as features, benefits, specifications, and usage instructions. The purpose of a product description is to inform potential customers about the product, persuade them to make a purchase, and enhance their overall shopping experience.</p>

  
  <?php
      $conn=mysqli_connect("localhost","root","","icecreamshop");
      if(!$conn){
          die("Not conneted".mysqli_connect_error());
      }

      $query="SELECT * FROM 	app_item";

      $res=mysqli_query($conn,$query);

      $count=mysqli_num_rows($res);
     
      if($count>0){
         ?>
          <div class="grid md:grid-cols-3 grid-cols-1 gap-12 items-center justify-center mx-auto">
             <?php
         
      while($row=mysqli_fetch_assoc($res)){


         $app_id=$row['app_id'];
         $app_name=$row['app_name'];
         $app_im=$row['app_im']; 
         $app_ac=$row['app_ac'];
         $app_pr=$row['app_pr'];
         $app_ti=$row['app_ti'];
         $app_des=$row['app_des'];
         $app_date=$row['app_date']; 
          $approved=$row['approved'];
       
   ?>
      




<div class="">
<div class="max-w-sm h-[520px] bg-white  rounded-lg shadow-lg">
  <div class="justify-center flex rounded-md  ">
  <a href="#">
        <img class="rounded-t-lg w-[320px] shadow-md h-[250px] p-4" src="<?php echo $app_im; ?>" alt="" />
    </a>
  </div>
    <div class="p-5 ml-3">
        <a href="#">
            <h5 class="mb-2 text-3xl  text-orange-950 font-bold tracking-tight  dark:text-white"><?php echo $app_name; ?></h5>
        </a>

        
        <p class="mb-3 font-medium   text-xl   text-amber-900"><?php echo $app_ti; ?></p>
        <p class="mb-3 font-medium text-xl "><?php echo $app_ac; ?></p>
       
        <div class="flex flex-row items-center pb-2">
   
   
   <h1 class="text-xl font-bold ">$<?php echo $app_pr ?></h1>
   </div>
        <a href="./MenuDet.php?app_id=<?php echo $app_id ?>" class="inline-flex items-center px-3 py-4 mt-3 text-sm font-medium text-center text-white bg-orange-900 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Details
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
</div>

<?php

}
?>
<?php         
}
?>

          </div>

    <!-- fotter -->
    <?php
include "/xampp/htdocs/Ice/php/NavFot/Foot.php"

?>