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

<div class="navbar bg-pink-100  shadow-md">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </div>
            <ul tabindex="0" class="menu font-bold menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="http://localhost:3000/php/bestfood/index.php">Home</a></li>
                <li><a href="http://localhost:3000/php/AboutUs/Aboutus.php">About Us</a></li>
                <li><a href="http://localhost:3000/php/Loginpart/Resister.php">Register</a></li>
                <li><a href="http://localhost:3000/php/MenuItem/AMenu.php">Menu</a></li>
                <?php
$userEmail = isset($_POST["us_em"]) ? $_POST["us_em"] : "";

if ($userEmail == "x@gmail.com") {
   
?>
  
  <li class="text-[18px]"><a href="http://localhost:3000/php/Dashborad/Dashboard.php">Dashboard</a></li>
<?php
} else {
?>
 <li class="hidden"><a href="http://localhost:3000/php/Dashborad/Dashboard.php">Dashboard</a></li>
<?php
}
?>
            </ul>
        </div>
        <a class="text-2xl font-bold  text-orange-950">SCOOPY</a>
        <img class="h-16" src="https://i.ibb.co/K94TZkj/ice-cream-vector-illustration-on-white-background-EF1-JBK-removebg-preview.png" alt="">
    </div>
    <div class="navbar-center font-bold  hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li class="text-[18px]"><a href="http://localhost:3000/php/bestfood/index.php">Home</a></li>
            <li  class="text-[18px]"><a href="http://localhost:3000/php/AboutUs/Aboutus.php">About Us</a></li>
            <li  class="text-[18px]"><a href="http://localhost:3000/php/Loginpart/Resister.php">Register</a></li>
            <li class="text-[18px]"><a href="http://localhost:3000/php/MenuItem/AMenu.php">Menu</a></li>
           
<?php
$userEmail = isset($_POST["us_em"]) ? $_POST["us_em"] : "";

if ($userEmail == "x@gmail.com") {
   
?>
  
  <li class="text-[18px]"><a href="http://localhost:3000/php/Dashborad/Dashboard.php">Dashboard</a></li>
<?php
} else {
?>
 <li class="hidden"><a href="http://localhost:3000/php/Dashborad/Dashboard.php">Dashboard</a></li>
<?php
}
?>

        </ul>
    </div>
    <div class="navbar-end">
        <a href="http://localhost:3000/php/Loginpart/Login.php" class="w-[90px] text-sm h-[50px] rounded-lg items-center text-center pt-3  hover:bg-white hover:text-black bg-pink-600 text-white font-bold">Login</a>
    </div>
</div>
         
</body>
</html>
