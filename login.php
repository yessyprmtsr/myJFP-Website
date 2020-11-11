<?php 
session_start();

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "customer";

$message = "";

if(count($_POST) > 0){

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


$result = mysqli_query($conn,"SELECT * FROM user WHERE username = '" . $_POST["username"] . "' AND password = '". $_POST["password"]."'" );

$row = mysqlI_fetch_array($result);

if( is_array($row)){

// retrieve fields from the login form
 $_SESSION['username'] = $row['username'];
 $_SESSION['password'] = $row['password'];

}else {
    $message = "Invalid Username or Password";
}

}

if (isset($_SESSION['username'])) {

    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myJFP-About</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">my<span>JFP</span></a></div>
            <ul class="menu">
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="booking.html">Booking</a></li>
                <li><a href="services.html">Services</a></li>


            </ul>
            <ul class="form">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
            </ul>
            <!-- <ul class="menu2">
                <li><a href="login.html">LogIn</a></li> <span>|</span>
                 <li><a href="login.html">SignUp</a></li>
            </ul> -->
        </div>
    </nav>

    <!-- home section -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Welcome to myJFP</div>
                <div class="text-2">Your Satisfaction</div>
                <div class="text-3">Is our<span> Priority</span></div>
            </div>
        </div>
    </section>

    <!-- about section -->
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">LogIn / SignUp</div>
            <!-- <div class="title signup">Welcom! SignUp</div> -->
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slider" id="login" checked>
                <input type="radio" name="slider" id="signup" checked>
                <label for="login" class="slide login">LogIn</label>
                <label for="signup" class="slide signup">SignUp</label>
                <div class="slide-tab">

                </div>
            </div>
            <div class="form-inner">
                <form action="" method="POST"  class="login">
                <div class="message"><?php if($message!="") { echo $message; } ?></div>
                    <div class="field">
                        <input type="text" name="username"  placeholder="email address / phone" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password"  placeholder="password" required>
                    </div>
                    <div class="pass-link"><a href="#">Forget password?</a></div>
                    <div class="field">
                        <input type="submit" value="LogIn">
                    </div>
                    <div class="signup-link">Not a Member yet? <a href="#">SignUp now</a></div>
                </form>
                <form action="#" class="signup">
                    <div class="field">
                        <input type="text" placeholder="email address / phone" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="password" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="confirm password" required>
                    </div>
                    <div class="field">
                        <input type="submit" value="SignUp">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const loginForm = document.querySelector("form.login");
        const signupForm = document.querySelector("form.signup");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector(".signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
        });
        signupLink.onclick = (()=>{
            signupBtn.onclick();
            return false;
        });
    </script>
    <!-- footer section -->
    <footer>
        <div class="footer">
            <div class="max-width">

                <ul class="ftmenu">
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">myJFP.com</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">booking</a></li>
                    <li><a href="#">About</a></li>
                    <!-- <li><a href="#"></a></li> -->
                </ul>
                <span class="far fa-copyright"> 2020 all rights reserved.</span>
            </div>
        </div>


    </footer>

    <script src="script.js"></script>
</body>
</html>