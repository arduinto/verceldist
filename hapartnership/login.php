<?php
session_start();

// Replace with your database credentials
$servername = "localhost"; // or your server IP
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "hapartners_db"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize the error message variable
$error_message = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; // assuming your input field has name="username"
    $password = $_POST['password']; // assuming your input field has name="password"
    $rememberme = isset($_POST['rememberme']); // check if remember me is set

    // Validate form inputs
    if (empty($username) || empty($password)) {
        $error_message = "Username and password cannot be empty.";
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("SELECT * FROM sbpusers WHERE username = ? AND password = ?");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result === false) {
            die("Execute failed: " . $stmt->error);
        }

        if ($result->num_rows > 0) {
            // Login successful
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $username; // Store username in session for future use

            // Set cookies if 'Remember Me' is checked
            if ($rememberme) {
                setcookie('username', $username, time() + (86400 * 30), "/"); // 30 days expiry
                setcookie('password', $password, time() + (86400 * 30), "/"); // 30 days expiry
            } else {
                // Clear cookies if 'Remember Me' is not checked
                setcookie('username', '', time() - 3600, "/");
                setcookie('password', '', time() - 3600, "/");
            }

            // Get Google Sheet link from the database
            $google_sheet_link = $row['gsheet'];

            // Redirect to Google Sheet link
            header("Location: $google_sheet_link");
            exit();
        } else {
            // Login failed
            $error_message = "Invalid username or password.";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - HAP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="login.php">
                    <div class="login-form-head">
                        <h2><b>Territory Household and Partnership</b></h2>
                        <p><b>Semangat Pagi! Silakan Login</b></p>
                    </div>
                    <!-- Alert container -->
                    <?php if (!empty($error_message)) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong><?php echo $error_message; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding-top: 6px;">
                                <span class="fa fa-times"></span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="InputEmail1">Username</label>
                            <input type="text" id="inputUsername1" name="username">
                            <i class="ti-uname"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="InputPassword1">Password</label>
                            <input type="password" id="InputPassword1" name="password">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="rememberme">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" name="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                        <!-- <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="signup.php">Sign up</a></p>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>