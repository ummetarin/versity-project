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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "icecreamshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM orderitem";
$query = mysqli_query($conn, $sql);

if (!$query) {
    die("Error fetching data: " . mysqli_error($conn));
}
?>

 <!-- navbar -->

 <div class="flex flex-row">
<div class="w-[200px] min-h-screen b bg-gray-800 text-white  flex flex-col">
   <div>
    <h1 class="text-center font-bold pt-12">ADMIN DASHBOARD</h1>
   </div>
   <?php
    include '../NavFot/Dash.php'
  ?>
  
</div>


 

 
    <div class="py-10">

<table class="w-full text-sm text-left rtl:text-right  text-black dark:text-gray-400  pt-24">
<thead class="text-xs text-pink-500 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
        <th scope="col" class="p-4">
            <div class="flex items-center">
                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checkbox-all-search" class="sr-only">checkbox</label>
            </div>
        </th>
        <th scope="col" class="px-6 py-3">
            Name
        </th>
        <th scope="col" class="px-6 py-3">
            Price
        </th>
        <th scope="col" class="px-6 py-3">
            Username
        </th>
        <th scope="col" class="px-6 py-3">
            useremail
        </th>
        <th scope="col" class="px-6 py-3">
            Date
        </th>
        <th scope="col" class="px-6 py-3">
            Delete
        </th>
    </tr>
</thead>
<tbody>
<!-- 
Full texts
or_id	
or_name	
or_pr	
or_us	
or_em	
or_date	 -->
<?php
while ($data = mysqli_fetch_assoc($query)) {
    $or_id = $data['or_id'];
    $or_name = $data["or_name"];
    $or_pr = $data["or_pr"];
    $or_em = $data["or_em"];
    $or_us = $data["or_us"];
    $or_date = $data["or_date"];


    echo "<tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600\">
            <td class=\"w-4 p-4\">
                <div class=\"flex items-center\">
                    <input id=\"checkbox-table-search-2\" type=\"checkbox\" class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\">
                    <label for=\"checkbox-table-search-2\" class=\"sr-only\">checkbox</label>
                </div>
            </td>
            <td class=\"px-6 py-4\">$or_name</td>
            <td class=\"px-6 py-4\">$or_pr</td>
            <td class=\"px-6 py-4\">$or_us</td>
            <td class=\"px-6 py-4\">$or_date</td>
            <td class=\"px-6 py-4\">$or_em</td>
            <td class=\"px-6 py-4\">
                <button class=\"w-[100px] h-[50px] rounded-lg bg-red-600 text-white\"><a href=\"../Order/Orderdlt.php?or_id=$or_id\" class=\"font-medium dark:text-blue-500 hover:underline\">Delete</a></button>
            </td>
        </tr>
        ";
}

echo "</tbody>
    </table>";

mysqli_close($conn);
?>
    <!-- Footer -->
    </div>
   
 </div>
</body>
</html>




