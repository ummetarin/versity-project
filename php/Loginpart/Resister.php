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

    <!-- login -->
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

    if (isset($_POST["us_name"]) && isset($_POST["us_em"]) && isset($_POST["us_pa"]) && isset($_POST["us_cpa"])) {
        $us_name = $_POST["us_name"];
        $us_em = $_POST["us_em"];
        $us_pa = $_POST["us_pa"];
        $us_cpa = $_POST["us_cpa"];

        // Check if passwords match
        if ($us_pa === $us_cpa) {
            // Prepare and bind SQL statement to prevent SQL injection
            $sql = "INSERT INTO user (us_name, us_em, us_pa, us_cpa) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $us_name, $us_em, $us_pa, $us_cpa);

            if ($stmt->execute()) {
                ?>
                <div class="alert alert-success font-medium">
                    <h1 class="text-black">Register data inserted</h1>
                </div>
                <?php
            } else {
                ?>
                <div class="alert alert-danger">
                    <h1 class="text-black">Failed to insert data</h1>
                </div>
                <?php
            }
            $stmt->close();
        } else {
            ?>
            <div class="alert alert-danger">
                <h1 class="text-black">Passwords do not match</h1>
            </div>
            <?php
        }
    }
    $conn->close();
    ?>

    <!-- res -->
    <div class="flex md:flex-row flex-col justify-center mx-auto py-12 gap-16 items-center">
        <div class="">
            <form class="form" action="../Loginpart/Resister.php" method="post">
                <p class="title">Register</p>
                <p class="message">Signup now and get full access to our app.</p>
                <label>
                    <input class="input" name="us_name" type="text" placeholder="" required="">
                    <span>Name</span>
                </label>

                <label>
                    <input class="input" name="us_em" type="email" placeholder="" required="">
                    <span>Email</span>
                </label>

                <label>
                    <input class="input" name="us_pa" type="password" placeholder="" required="">
                    <span>Password</span>
                </label>
                <label>
                    <input class="input" name="us_cpa" type="password" placeholder="" required="">
                    <span>Confirm password</span>
                </label>
                <button type="submit" class="submit">Register</button>
            </form>
        </div>

        <div>
            <img src="https://i.ibb.co/Yd3RsZ3/2341-png-860-removebg-preview.png" alt="">
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
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current"><path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current"><path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current"><path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
            </div>
        </nav>
    </footer>

    <script>
        // JavaScript validation to check if passwords match
        document.querySelector('form').addEventListener('submit', function(event) {
            var password = document.querySelector('input[name="us_pa"]').value;
            var confirmPassword = document.querySelector('input[name="us_cpa"]').value;

            if (password !== confirmPassword) {
                event.preventDefault();
                alert("Passwords do not match");
            }
        });
    </script>
</body>
</html>
