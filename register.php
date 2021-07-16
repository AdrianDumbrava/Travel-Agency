<!DOCTYPE html>
<html lang="en">
    <?php
    if (isset($_POST['register'])) {
        //database connection 'formular_contact'
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "final";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
    
        $sql = "INSERT INTO register_formular (username, phone, mail, pass)
        VALUES ('$username', '$phone', '$mail', '$pass')";
    
        if($conn->query($sql) === TRUE) {
            echo "new account has been created";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    
        header("location: register.php");
    }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="shortcut icon" href="img/favicon.jpg">
    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/login.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
</head>

<body>
     <!-- =====Top Bar===== -->
     <div class="top-bar">
        <div class="container">
            <div class="col-12 text-right">
                <p><i>"Jobs fill your pockets, adventures fill your soul."</i></p>
            </div>
        </div>
    </div>
    <!-- =====End Top Bar===== -->


    <!-- =====Navigation===== -->
    <nav class="navbar bg-light navbar-light navbar-expand-md py-0 ">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                <img src="img/logo.png" alt="Logo" title="Logo"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Services
						</a>
                        <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="hotels.html">Hotels & Resorts</a>
                            <a class="dropdown-item" href="activities.html">Tours & Activities</a>
                            <a class="dropdown-item" href="other.html">Other Services</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="register.php" class="nav-link active">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- =====End Navigation===== -->




    <!-- =====REGISTER FORM===== -->

    <div class="section">
        <div class="inner">
            
            <form method="post">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-user-plus fa-3x"></i></div>
                </div>
                <h3 class="text-center pb-5">New Account</h3>
                <div class="form-holder">
                    <span><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-holder">
                    <span><i class="fas fa-mobile-alt"></i></span>
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                </div>
                <div class="form-holder">
                    <span><i class="far fa-envelope"></i></span>
                    <input type="text" class="form-control" name="mail" placeholder="Mail">
                </div>
                <div class="form-holder">
                    <span><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                </div>
                <button name="register">
                    <span>Register</span>
                </button>
            </form>
        </div>
    </div>
    <!-- =====END REGISTER FORM===== -->




    <!-- =====Start Socket===== -->
     <div class="socket text-light text-center py-2">
        <p> &copy; <a href="https://www.facebook.com/adriand14/" target="_blank">adrian.com</a></p>
    </div>
    <!-- =====End Socket===== -->



    <!-- Script Source Files -->

    <!-- jQuery -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap 4.5 JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Font Awesome -->
    <script src="js/all.min.js"></script>

    <!-- End Script Source Files -->
</body>
</html>
