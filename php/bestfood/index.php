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

    <div class="hero min-h-screen image ">
        <div class="hero-content flex-col md:flex-row">
         
            <div class="md:w-[1000px]">
              <h1 class="text-4xl text-pink-950 font-bold">Flavour Full Fusion</h1>
              <p class="py-3 text-pink-950 ">My Icecream Shop offers a delightful array of artisanal ice creams crafted with premium ingredients. Indulge in a variety of flavors, from classic favorites to unique, seasonal creations. Our cozy atmosphere and friendly service make it the perfect destination for ice cream enthusiasts of all ages.</p>
              <button class="btn bg-white text-pink-800 font-bold">Get Started</button>
            </div>
            <div class="md:w-[100px]">

            </div>
          </div>
      </div>

      
      
       
 <!-- flavour -->

 <div class="pt-12">
  <h1 class="text-3xl font-bold text-center text-pink-500 pt-8 pb-2 ">Flavours Available In Our Shop</h1>
  <p class="px-24 font-medium text-center">A timeless classic, vanilla ice cream is a simple yet indulgent treat with its smooth, creamy texture and delicate, sweet flavor. It serves as a versatile base for various toppings and complements a wide range of desserts.</p>
  <div class="flex md:flex-row flex-col justify-center items-center gap-8 pt-16">

   <div class="flex flex-col items-center justify-center">
    <img class="h-[150px] w-[150px] rounded-full" src="https://i.ibb.co/99BhP1x/vanilla-flavor-for-ice-cream-1.jpg" alt="">
    <h1 class="font-bold py-3 text-rose-800">Vanila</h1>
   </div>
   <div class="flex flex-col items-center justify-center">
    <img class="h-[150px] w-[150px] rounded-full" src="https://i.ibb.co/DbkH4QW/homemade-chocolate-ice-cream-recipe-11.jpg" alt="">
    <h1 class="font-bold py-3 text-rose-800">Choclate</h1>
   </div>
   <div class="flex flex-col items-center justify-center">
    <img class="h-[150px] w-[150px] rounded-full" src="https://i.ibb.co/Jz5GJns/made-with-dairy-fat-mango-flavoured-ice-cream-899.jpg" alt="">
    <h1 class="font-bold py-3 text-rose-800">Mango</h1>
   </div>
   <div class="flex flex-col items-center justify-center">
    <img class="h-[150px] w-[150px] rounded-full" src="https://i.ibb.co/nQqz4CR/strawberry-ice-cream-flavour-1576480332-5208647.jpg" alt="">
    <h1 class="font-bold py-3 text-rose-800">Strawberry</h1>
   </div>
   <div class="flex flex-col items-center justify-center">
    <img class="h-[150px] w-[150px] rounded-full" src="https://i.ibb.co/sgzJtqF/Butter-Pecan-Turtle-Sundae-1.jpg" alt="">
    <h1 class="font-bold py-3 text-rose-800">Butter Pecan</h1>
   </div>
   <div class="flex flex-col items-center justify-center">
    <img class="h-[150px] w-[150px] rounded-full" src="https://i.ibb.co/Q83x9xM/Mint-Chocolate-Chip-Ice-Cream-24-2-720x720.jpg" alt="">
    <h1 class="font-bold py-3 text-rose-800">Mini Choka</h1>
   </div>



  </div>
 
 </div>


      







   <!-- 2 -->

   <div class="flex flex-row justify-center items-center pt-12 ">
        <h1 class="text-center text-3xl  font-bold text-pink-500 py-4 pt-12">Why You Should Visit Our Shop??</h1>
        
       </div>
       <p class="font-medium px-24 pb-10 text-sm text-center text-sky-950">In our restaurant, every team member is a valued and essential part of creating a memorable dining experience. Our chefs, with their culinary expertise, carefully curate a menu that blends flavors and techniques to satisfy diverse palates. The kitchen staff works seamlessly to ensure each dish meets the highest standards of quality.
       <div class="hero ">
        
        <div class="hero-content justify-around flex-col md:flex-row gap-24 pt-12 pb-36">
          <img class="w-[500px] h-[340px]" src="https://i.ibb.co/54vRV7Q/desktop-wallpaper-the-fresh-dessert-yummy-ice-cream.jpg" alt="" class="max-w-sm rounded-lg shadow-2xl" />
          <div class="w-[400px] ml-10  ">
            <h1 class="text-2xl text-pink-700 font-bold">Our Shop Benefits</h1>
            <p class="py-6  text-purple-700">Our shop offers high-quality products, competitive prices, and excellent customer service. With a wide selection and frequent promotions, we strive to meet our customers' diverse needs. Additionally, we provide a loyalty program to reward our regular patrons, ensuring a rewarding shopping experience for all</p>
            <button class="btn bg-pink-500 text-white">Visit Shop</button>
          </div>
        </div>
      </div>

    

     <!-- best icecream -->
       <!-- get data -->


       <h1 class="text-center text-3xl font-bold text-pink-500 pt-24 pb-3  ">Best Categories In Our Shop</h1>
        <p class="pb-16 text-center px-24 font-medium">Determining the "best" categories in your ice cream shop can depend on various factors including customer preferences, sales data, and seasonal trends. However, here are some popular categories</p>
       <?php
             $conn=mysqli_connect("localhost","root","","icecreamshop");
             if(!$conn){
                 die("Not conneted".mysqli_connect_error());
             }

             $query="SELECT * FROM category";

             $res=mysqli_query($conn,$query);

             $count=mysqli_num_rows($res);
            
             if($count>0){
                ?>
                 <div class="grid md:grid-cols-3 grid-cols-1 gap-12 items-center justify-center mx-auto">
                    <?php
                
             while($row=mysqli_fetch_assoc($res)){
                $cat_id=$row['cat_id'];
                $cat_name=$row['cat_name'];
                $cat_img=$row['cat_img'];
                $cat_fea=$row['cat_fea'];
                $user_name=$row['user_name'];
             
          ?>

      
           <div class="w-[350px] h-[360px] bg-base-100 shadow-lg ml-10">
             <div class="flex flex-col items-center">
             <img class="w-[320px] rounded-md h-[280px] p-4 " src="<?= $cat_img ?>" alt="">
             </div>

                <h1 class="text-center text-xl font-medium  py-2 pb-4"><?php echo $cat_name; ?></h1>
                
             </div>
 

             

  
           
      

          <?php

}
?>
</div> 
<?php         
}
?>

      <!-- avilservies -->

    <div class="pt-16">
      <h1 class="text-center text-pink-500 text-3xl font-bold">Available Services Are</h1>
       <p class="font-medium text-center px-36 py-4 text-sm">Indulge in a delightful variety of handcrafted ice creams at our shop. From classic flavors to unique creations, we offer a sweet escape for your taste buds. Enjoy premium quality treats made with love and the finest ingredients.</p>
      <div class="flex md:flex-row  flex-col justify-center mx-auto   items-center py-12">
           <div class="text-center w-[350px] h[400px] shadow-lg  ">
           
               <h1 class="pt-7 text-2xl text-purple-700 font-bold">Home Delivery</h1>
               <div class="justify-center flex mx-auto py-7">
                <img class="h-16" src="https://i.ibb.co/C0PttF4/images-6-removebg-preview.png" alt="">
               </div>
               <p class="px-3 pb-6" >Experience the convenience of home delivery with our shop. Savor your favorite flavors from our menu in the comfort of your home, with fast and reliable service. Order now for a delightful ice cream experience brought straight to your doorstep!</p>
               
           </div>
           <div class="text-center w-[350px] h[400px] shadow-lg   ">
            <h1 class="pt-7 text-2xl text-purple-700 font-bold">Online Order</h1>
            <div class="justify-center flex mx-auto py-7">
              <img class="h-16" src="https://i.ibb.co/64jcHMB/6384797-removebg-preview.png" alt="">
             </div>
            <p class="px-3 pb-6" >Discover the ease of online ordering at our ice cream shop. Browse our tempting menu, place your order effortlessly, and relish the joy of delicious ice cream delivered right to your doorstep. Treat yourself with a click! Grab it early,Because time is too short.......Early</p>
        </div>
        <div class="text-center w-[350px] h[400px] shadow-lg  ">
          <h1 class="pt-7 text-2xl text-purple-700 font-bold">Visit Shop</h1>
          <div class="justify-center flex mx-auto py-7">
            <img class="h-16" src="https://i.ibb.co/MCjQCwV/free-store-icon-2017-thumb-removebg-preview.png" alt="">
           </div>
          <p class="px-3 pb-6" > Immerse yourself in a cozy ambiance, where our friendly staff awaits to serve you delectable frozen delights. Create lasting memories with friends and family as you indulge in a sweet escape at our ice cream shop.There also avail safe zone </p>
      </div>
      </div>





    </div>


<!-- Reviews -->
<div class=" pb-8">
  
<div class="flex flex-row justify-center items-center pt-12    ">
  <h1 class="text-center text-3xl  font-bold py-1 text-pink-500 ">Reviews Of Our SHOP</h1>

 </div>
 <p class="font-medium px-36 py-2 text-sm text-center text-sky-950">In our restaurant, every team member is a valued and essential part of creating a memorable dining experience. Our chefs, with their culinary expertise, carefully curate a menu that blends flavors and techniques to satisfy diverse palates. The kitchen staff works seamlessly to ensure each dish meets the highest standards of quality.
<div class="flex md:flex-row flex-col mx-auto justify-center items-center py-12">

  <div class="w-[340px]  shadow-lg   rounded-lg  ">
    <div class="flex flex-col justify-center mx-auto items-center ">
      <img class="w-[320px] h-[320px] p-5 rounded-lg" src="https://i.ibb.co/wR6Jy5n/chocolate-icecream-in-an-icecream-maker.jpg" alt="">
        <div class="flex flex-row items-center gap-2 pt-4 ml-12">
          <img class="w-10 h-10 rounded-full" src="https://i.ibb.co/RNtWfqf/images-5.png" alt="">
          <h1 class="font-medium text-xl ">Raihan Amir</h1>
        </div>
        <div class="pb-4">
          <p class="">Very good and tasty to eat</p>
        <img class="h-10 mr-40  " src="https://i.ibb.co/gJ1NYK1/download-1-removebg-preview-1.png" alt="">
        </div>
    </div>  
  
  </div>
  <div class="w-[340px]  shadow-lg   rounded-lg">
    <div class="flex flex-col justify-center mx-auto items-center">
      <img class="w-[320px] h-[320px] p-5 rounded-lg" src="https://i.ibb.co/Jt9HSx0/homemade-ice-cream-recipe.jpg" alt="">
        <div class="flex flex-row items-center gap-2 ml-12 pt-4">
          <img class="w-10 h-10 rounded-full" src="https://i.ibb.co/RNtWfqf/images-5.png" alt="">
          <h1 class="font-medium text-xl ">Julekha Islam</h1>
        </div>
        <div class="pb-4 ">
          <p class="">Creamy to eat and yummy!!</p>
        <img class="h-10 mr-40 " src="https://i.ibb.co/gJ1NYK1/download-1-removebg-preview-1.png" alt="">
        </div>
    </div>  
  
  </div>
  <div class="w-[340px]  rounded-lg shadow-lg   ">
    <div class="flex flex-col justify-center mx-auto items-center">
      <img class="w-[320px] h-[320px] p-5 rounded-lg" src="https://i.ibb.co/yhvfDN9/images-10.jpg" alt="">
        <div class="flex flex-row items-center gap-2 ml-12 pt-4">
          <img class="w-10 h-10 rounded-full" src="https://i.ibb.co/RNtWfqf/images-5.png" alt="">
          <h1 class="font-medium text-xl ">Shaninur Roy</h1>
        </div>
      <div class="pb-4">
        <p class="">Best icecream ever..</p>
        <img class="h-10 mr-40 " src="https://i.ibb.co/gJ1NYK1/download-1-removebg-preview-1.png" alt="">
      </div>
    </div>  
    
  
  </div>

</div>
    
     

</div>
</div>
    <!-- service -->

    <div>





    </div>




      <!-- worker -->

      <div class="tex pb-24   ">
       <div class="flex flex-row justify-center items-center">
        <h1 class="text-center text-3xl  font-bold py-3 text-pink-600 pt-12">Worker of Our SHOP</h1>
      
       </div>
        <p class="font-medium px-24 py-4 text-sm text-center text-white">In our restaurant, every team member is a valued and essential part of creating a memorable dining experience. Our chefs, with their culinary expertise, carefully curate a menu that blends flavors and techniques to satisfy diverse palates. The kitchen staff works seamlessly to ensure each dish meets the highest standards of quality.
</p>   
         <div class="flex pt-7 md:flex-row flex-col justify-center gap-24  mx-auto items-center">
     
     <div>
        <img class="w-[140px] h-[150px] rounded-md" src="https://i.ibb.co/DCQBR5G/426978220-1060218615269305-3988761960198985566-n.jpg" alt="">
         <h1 class="text-sm text-center  py-2 text-pink-600">Umme Homaira</h1>
      </div>
     <div>
        <img class="w-[150px] h-[150px] rounded-md" src="https://i.ibb.co/sy7LNVX/pretty-barista-crossing-arms-107420-28840.jpg" alt="">
        <h1 class="text-sm text-center  py-2 text-pink-600">Rabina Shek</h1>     
      </div>
     <div>
        <img class="w-[150px] h-[150px] rounded-md" src="https://i.ibb.co/FzPd5sS/waitress-showing-platter-of-meatballs-in-a-restaurant-takeaway-food-kitchen-behind-RWN732.jpg" alt="">
        <h1 class="text-sm text-center  py-2 text-pink-600">Jacklin jeun</h1>
      </div>
     <div>
        <img class="w-[150px] h-[150px] rounded-md" src="https://i.ibb.co/k3B7Q1j/images.jpg" alt="">
        <h1 class="text-sm text-center  py-2 text-pink-600">Darbex Chu</h1>
      </div>
   

         </div>
         
          
    
    </div>


    <!-- Footer -->

   <?php
include "/xampp/htdocs/Ice/php/NavFot/Foot.php"

?>