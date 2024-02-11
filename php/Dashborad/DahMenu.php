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

$sql = "SELECT * FROM item";
$query = mysqli_query($conn, $sql);

if (!$query) {
    die("Error fetching data: " . mysqli_error($conn));
}
?>

<div class="flex flex-row">
<div class="w-[200px] min-h-screen b bg-gray-800 text-white  flex flex-col">
   <div>
    <h1 class="text-center font-bold pt-12">ADMIN DASHBOARD</h1>
   </div>

  <?php
    include '../NavFot/Dash.php'
  ?>
</div>




<table class="w-full text-sm text-left rtl:text-right text-black dark:text-gray-400">
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
            Image
        </th>
        <th scope="col" class="px-6 py-3">
            Price
        </th>
        <th scope="col" class="px-6 py-3">
            Date
        </th>
        <th scope="col" class="px-6 py-3">
            Approved
        </th>
        <th scope="col" class="px-6 py-3">
            Edit
        </th>
        <th scope="col" class="px-6 py-3">
            Delete
        </th>
    </tr>
</thead>
<tbody>

<?php
while ($data = mysqli_fetch_assoc($query)) {
    $it_id = $data['it_id'];
    $it_name = $data["it_name"];
    $it_im = $data["it_im"];
    $it_pr = $data["it_pr"];
    $it_date = $data["it_date"];

    echo "<tr class=\"bg-white font-bold border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600\">
            <td class=\"w-4 p-4\">
                <div class=\"flex items-center\">
                    <input id=\"checkbox-table-search-2\" type=\"checkbox\" class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\">
                    <label for=\"checkbox-table-search-2\" class=\"sr-only\">checkbox</label>
                </div>
            </td>
            <td class=\"px-6 py-4\">$it_name</td>
            <td class=\"px-6 py-4 h-[20px] w-[90px]\"><img src=\"$it_im\" class=\"w-10 h-10 rounded-full\" alt=\"Image\"></td>
            <td class=\"px-6 py-4\">$$it_pr</td>
            <td class=\"px-6 py-4\">$it_date</td>
            <td class=\"px-6 py-4\">
                <button class=\"btn bg-orange-500 text-white\" onclick=\"disableButton($it_id)\">
                    <a href=\"approve_item.php?it_id=$it_id&approve=1\" class=\"font-medium dark:text-blue-500 hover:underline\">Approved</a>
                </button>
            </td>
            <td class=\"px-6 py-4\">
                <button class=\"btn bg-pink-300\"><a href=\"DashEdit.php?it_id=$it_id\" class=\"font-medium dark:text-blue-500 hover:underline\">Edit</a></button>
            </td>
            <td class=\"px-6 py-4\">
                <button class=\"btn bg-red-600 text-white\"><a href=\"../Delete/Dashdlt.php?it_id=$it_id\" class=\"font-medium dark:text-blue-500 hover:underline\">Delete</a></button>
            </td>
        </tr>";
}

echo "</tbody>
    </table>";

mysqli_close($conn);
?>

<script>
    function disableButton(it_id) {
        var buttons = document.querySelectorAll('button[data-id="' + it_id + '"]');
        buttons.forEach(function(button) {
            button.disabled = true;
        });
    }
</script>

</body>
</html>
