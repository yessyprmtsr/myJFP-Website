<?php
session_start();
require 'controller.php';
//cek login pa belom
if(isset($_SESSION['login'])){
    header("Location: pemesanan.php");
    exit;
}
if(isset($_POST['login'])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi,"SELECT*FROM user WHERE username = '$username'");
    //cek username
        if(mysqli_num_rows($result) === 1){
        //cek pw
        $row = mysqli_fetch_assoc($result);
        //cek string sama ga dg hashnya
        if(password_verify($password, $row["password"])){
            //set session
            $_SESSION["login"] = true;
            $_SESSION["username"] = "username";
            header("Location: pemesanan.php");
            exit;
        };
    }
    $error = true;
}
if(isset($_POST["register"])){
if(registrasi($_POST) > 0){
    echo "
        <script>
        alert('Data telah ditambahkan!');
        </script>
    ";
}else{
   echo mysqli_error($koneksi);
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myJFP-About</title>
    <link rel="stylesheet" href="../style.css">
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
                <li><a href="pemesanan.php">Booking</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="login.php">Login</a></li>

            </ul>
            <!-- <ul class="form">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
            </ul> -->
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
                <div class="message"></div>
                    <div class="field">
                        <input type="text" name="username"  placeholder="email address" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password"  placeholder="password" required>
                    </div>
                    <!-- <div class="pass-link"><a href="#">Forget password?</a></div> -->
                    <div class="field">
                        <input type="submit" name="login" value="Login">
                    </div>
                    <div class="signup-link">Not a Member yet? <a href="#">SignUp now</a></div>
                </form>
                <form action=""  method="POST" class="signup">
                    <div class="field">
                        <input type="text" name="username" placeholder="email address" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="password" required>
                    </div>
                    <div class="field">
                        <input type="password2" name="password2" placeholder="confirm password" required>
                    </div>
                    <div class="field">
                        <input type="submit" name="register" value="Signup">
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

    <script src="../script.js"></script>