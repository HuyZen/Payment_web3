<?php
session_start();
if(!isset( $_SESSION['username'])){
    header("location:index.php");
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", innitial-scale="1.0">
    <title>Trang Chu HCMUTE Blockchains</title>
    <link rel="stylesheet" href="style_payment.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./scripts/web3.js"></script>
 
</head>
<body>


    <div class="container">
        <nav>
            <img src="logo.webp" class="logo" >
            <ul>
            <li><a href="page.php">Home page</a></li>
                <li><a href="payment.php">Payment</a></li>
                <li><a href="stat.php">Statistical</a></li>
                <li><a href="cus.php">Customer Information</a></li>
            </ul>
            <!-- <button id="connectMM" class="btn">Connect Wallet</button> -->

            <!-- <button onclick="connectWallet()" class="btn">Connect Wallet</button> -->
          
            <h2>Account: <span class="showAccount"></span></h2>

            <a href="logout.php" class="bt">Log out</a>


            
        </nav>
        

        
        <button onclick="Payment()" class="pay">Payment</button>

        
        
    </div>

<script src="script.js"></script>
<script src="./process.js"></script>
</body>

</html>