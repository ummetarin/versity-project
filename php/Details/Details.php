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

<div classname="bg-white">
  <div classname="flex md:flex-row flex-col justify-center items-center gap-12 py-24">
    <div classname="md:w-[600px]">
      <img classname="md:w-[700px] w-[300px] md:h-[600px]" src="{data?.Image}" alt />
    </div>
    <div classname="md:w-[700px] md:h-[650px]">
      <div classname="flex flex-row  items-center ">
        <h1 classname="md:text-4xl font-bold ml-2  text-blue-600">Name</h1>
        <img classname="md:w-36" src="https://i.ibb.co/RBpjTyF/Medical-Logo-Design-Symbol-Icon-on-transparent-background-PNG-removebg-preview.png" alt />
      </div>
      <p classname="md:text-2xl text-[#2E2E2E] pb-4 px-4 font-medium ">Des</p>
      <div>
        <div>
          <div classname="flex flex-row  items-center">
            <img classname="w-16" src="https://i.ibb.co/Pc5QjmM/images-7-removebg-preview.png" alt />
            <h1 classname="md:text-2xl text-[#2E2E2E] font-medium ">Category</h1>
          </div>
          <div classname="flex flex-row  items-center">
            <img classname="h-16" src="https://i.ibb.co/4gC038L/pngtree-wind-global-solution-logo-design-vector-image-291454-removebg-preview.png" alt />
            <a href="jj"><h1 classname="md:text-2xl text-[#2E2E2E] font-medium ">Company</h1></a>
          </div>
          <div classname="flex flex-row  items-center ml-3 pb-2">
            <img classname="h-12" src="https://i.ibb.co/XxvTMjc/images-2-removebg-preview-1.png" alt />
            <h1 classname="md:text-2xl text-[#2E2E2E] font-medium  "> Price</h1> 
          </div>
        </div>
      </div>
      <div classname="pt-5">
        <button classname="bg-[#E1EEFF] text-blue-600 border-blue-600 btn rounded-full h-[60px] p-4 w-[180px] text-xl">Order Now</button> 
      </div>
    </div>
  </div>
</div>
