<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<!-- navbar -->
<?php
include '/xampp/htdocs/Ice/php/NavFot/Nav.php';
?>

<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "icecreamshop";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["us_em"]) && isset($_POST["us_pa"])) {
        $us_em = $_POST["us_em"];
        $us_pa = $_POST["us_pa"];

        $sql = "SELECT * FROM user WHERE us_pa='$us_pa' AND us_em='$us_em'";
        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                // User exists with the provided credentials
                // Redirect or set session here
                echo "<div class='alert alert-success font-medium'>
                        <h1 class='text-black'>Login successful</h1>
                      </div>";
            } else {
                // Invalid email or password
                echo "<div class='alert alert-warning font-medium'>
                        <h1 class='text-black'>Invalid email or password</h1>
                      </div>";
            }
        } else {
            // Failed to execute the query
            echo "<div class='alert alert-danger'>
                    <h1 class='text-black'>Failed to execute the query</h1>
                  </div>";
        }
    }
}
?>

<!-- footer -->
<div class="py-12  flex md:flex-row flex-col justify-center mx-auto items-center gap-24 ">
    <div>
        <div class="form-container">
            <p class="title">Login</p>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="input-group">
                    <label class="pt-3" for="Email">Email</label>
                    <input type="email" name="us_em" id="username" placeholder="">
                </div>
                <div class="input-group pb-4">
                    <label for="password">Password</label>
                    <input type="password" name="us_pa" id="password" placeholder="">
                </div>
                <button class="sign btn" type="submit">Log in</button>
            </form>
            <p class="signup pt-2">Don't have an account?
                <a rel="noopener noreferrer" href="http://localhost:3000/php/Loginpart/Resister.php" class="">Register</a>
            </p>
        </div>
    </div>
    <div class="ml-16">
        <img src="https://i.ibb.co/c3WPwLq/8997-png-300-removebg-preview.png " alt="">
    </div>
</div>

<!-- Footer -->
<footer class="footer p-10 bg-pink-100 text-base-content">
    <nav>
        <header class="footer-title">Services</header>
        <a class="link link-hover">Branding</a>
        <a class="link link-hover">Design</a>
        <a class="link link-hover">Marketing</a>
        <a class="link link-hover">Advertisement</a>
    </nav>
    <nav>
        <header class="footer-title">Company</header>
        <a class="link link-hover">About us</a>
        <a class="link link-hover">Contact</a>
        <a class="link link-hover">Jobs</a>
        <a class="link link-hover">Press kit</a>
    </nav>
    <nav>
        <header class="footer-title">Social</header>
        <div class="grid grid-flow-col gap-4">
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
        </div>
    </nav>
</footer>
</body>
</html>
