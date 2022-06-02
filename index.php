<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("location:page.php");
    }
    if(isset($_POST['dangnhap'])){
        $username= $_POST['username'];
        $password= $_POST['password'];
        if($username =='hcmute' && $password=='123456'){
            $_SESSION['username']= $username;
            header("location:page.php");

        }
    }
    else {
        
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BlockChain</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> Electric Payment</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="service.php">SERVICE</a></li>
                    
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To Text">
                <a href="#"><button class="btn">Search</button></a>
            </div>
            
        </div>
        <div class="content">
            <h1><br><span>HCMUTE</span>  <br>BLOCKCHAIN</h1>
            <!-- <p class="par">Nhanh chóng - Tiện lợi - An Toàn</p> -->
            <button class="cn"><a href="#">JOIN US</a></button>
            <div class="form" >
                <h2>Login Here</h2>
                <form action="index.php" method="POST">
                <input type="text" name="username" placeholder="Your ID" >
                <input type="password" name="password" placeholder="Your Password">
                <button class="btnn" type="submit" name="dangnhap">Login</button> 
                <p>
                    Have a problem?
                </p>
                
                <p class="ct"><a href="contact.php">Contact Us!</a></p>
            

                </form>
                
            </div>
        </div>
    </div>
</body>  
</html>
