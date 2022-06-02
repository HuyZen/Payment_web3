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
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./scripts/web3.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body>
   
    <div class="container">
        <nav>
            <img src="logo.webp" class="logo">
            <ul>
                <li><a href="page.php">Home page</a></li>
                <li><a href="payment.php">Payment</a></li>
                <li><a href="stat.php">Statistical</a></li>
                <li><a href="cus.php">Customer Information</a></li>
            </ul>


            <!-- <button id="connectMM" class="btn">Connect Wallet</button> -->


            
            <!-- <button onclick="connectWallet()" class="btn">Connect Wallet</button> -->
            <!-- <span class="connectWallet"></span> -->
            <button onclick="getAccount()" class="btn">Connect MetaMask</button>
            <!-- <h2>Account: <br>
             <b class="showAccount"></b>
            </h2> -->




            <a href="logout.php" class="bt">Log out</a>
        </nav>
        <h2>Account:
             <b class="showAccount"></b>
            </h2>
        <div class="content">
            <h1> Smart Contract </h1>
            <p>Contract payments in just a few minutes</p>
            <a href="#" class="btn"> Make instant transactions with ETH</a>
        </div>
        <div class="coin-list">
            <div class="coin">
                <img src="bitcon.png" >
                <div>
                    <h3>$<span id="bitcoin"> </span> </h3>
                    <p>Bitcoin</p>
                </div>
            </div>
            <div class="coin">
                <img src="ethereum.png" >
                <div>
                    <h3>$<span id="ethereum"></span></h3>
                    <p>Ethereum</p>
                </div>
            </div>
            <div class="coin">
                <img src="dog.jpg" >
                <div>
                    <h3>$<span id="dogecoin"></span></h3>
                    <p>Dogcoin</p>
                </div>
            </div>   
        </div>
    </div>

<script src="script.js"></script>
<script src="./process.js"></script>
</body>

</html>
