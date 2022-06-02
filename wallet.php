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
    <link rel="stylesheet" href="style_wallet.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav>
            <img src="logo.webp" class="logo" >
            <ul>
                <li><a href="payment.php">Thanh toán </a></li>
                <li><a href="stat.php">Thống kê</a></li>
                <li><a href="cus.php">Thông tin khách hàng</a></li>
                <li><a href="wallet.php">Ví</a></li>
            </ul>
            <a href="#" class="btn">EN</a>
            <a href="logout.php" class="bt">Đăng xuất</a>
            
        </nav>

        
        
    </div>

<script src="script.js"></script>
</body>

</html>