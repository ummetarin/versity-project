<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "icecreamshop";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET["or_name"]) && isset($_GET["or_date"]) && isset($_GET["or_us"]) && isset($_GET["or_em"]) && isset($_GET["or_pr"])) {
    $or_name = $_GET["or_name"];
    $or_date = $_GET["or_date"];
    $or_us = $_GET["or_us"];
    $or_em = $_GET["or_em"];
    $or_pr = $_GET["or_pr"];

    $sql = "INSERT INTO orderitem (or_name, or_date, or_us, or_em, or_pr)
            VALUES ('$or_name', '$or_date', '$or_us', '$or_em', '$or_pr')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

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

<?php
include '/xampp/htdocs/Ice/php/NavFot/Nav.php';
?>

<div class="justify-center flex">
    <div class="card">
        <div class="card-header">
            <div class="text-header font-bold">ORDER AN ICE CREAM</div>
        </div>
        <div class="card-body">
            <form action="OrderFrom.php" method="get">
                <div class="form-group shadow-md">
                    <label for="text">Item Name:</label>
                    <input required="" class="form-control" name="or_name" value="<?php echo $app_name; ?>" type="text">
                </div>

                <div class="flex flex-row gap-6 pb-4">
                    <div class="form-group w-[500px] shadow-md">
                        <label for="text">Item Price:</label>
                        <input required="" class="form-control" name="or_pr" value="<?php echo $app_pr; ?>" id="password" type="number">
                    </div>
                    <div class="form-group w-[500px] shadow-md">
                        <label for="date">Date:</label>
                        <input type="date" required="" class="form-control" name="or_date">
                    </div>
                </div>

                <div class="form-group shadow-lg">
                    <label for="text">User Name:</label>
                    <input required="" class="form-control" name="or_us" id="confirm-password" type="text">
                </div>

                <div class="form-group shadow-lg">
                    <label for="text">User Email:</label>
                    <input required="" class="form-control" name="or_em" id="confirm-password" type="email">
                </div>

                <div class="justify-center flex pt-6">
                    <input class="btn bg-red-500 text-white" type="submit" value="Order">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "/xampp/htdocs/Ice/php/NavFot/Foot.php";
?>

</body>
</html>
