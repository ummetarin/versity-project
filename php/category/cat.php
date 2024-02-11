<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Icecream Shop</title>
    <link rel="stylesheet" href="./cat.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="justify-center flex item-center mx-auto"> 
    
<div class="form-container" >
      <form class="form" method="POST">
        <div class="form-group">
          <label for="text">cat_name</label>
          <input type="text"  name="cat_name" required="">
        </div>
        <div class="form-group">
          <label for="text">cat_img</label>
          <input type="text" name="cat_img" required="">
        </div>
        <div class="form-group">
          <label for="text">cat_fea</label>
          <input type="text"  name="cat_fea" required="">
        </div>
        <div class="form-group">
          <label for="text">user_name</label>
          <input type="text"  name="user_name" required="">
        </div>
       <input type="submit" name="submit" class="form-submit-btn" value="Add Category">
    
      </form>
    </div>
</div>


<?php
if(isset($_POST['submit'])){
  $cat_name=$_POST['cat_name'];
  $cat_img=$_POST['cat_img'];
  $cat_fea=$_POST['cat_fea'];
  $user_name=$_POST['user_name'];

  if($cat_name && $cat_img && $cat_fea ){
     
    $conn=mysqli_connect("localhost","root","","icecreamshop");
    if(!$conn){
        die("Not conneted".mysqli_connect_error());
    }

    $query="INSERT INTO category (cat_name,cat_img,cat_fea,user_name)
    VALUES('$cat_name','$cat_img','$cat_fea','$user_name')";

    $result=mysqli_query($conn,$query);

    if(!$result){
        die("Not inserted".mysqli_error($conn));
    }



  }


}




?>


</body>
</html>