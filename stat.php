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
    <link rel="stylesheet" href="style_stat.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
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
            
            <!-- <button onclick="getAccount()" class="btn">Connect MetaMask</button> -->
            <h2>Account: <span class="showAccount"></span></h2>


            <a href="logout.php" class="bt">Log out</a>
            
        </nav>
        
            <h3>Tên Khách hàng: Nguyễn Hoàng Duy</h3>
            <div class="date">
                <label >Choose Date: </label>
                <form >
               <input type="datetime-local" class="form-control" placeholder="Select Datetime">
                </form> 
           </div>
           <iframe class="dothi" style="background: #FFFFFF;border: none;border-radius: 2px;box-shadow: 0 2px 10px 0 rgba(70, 76, 79, .2);" width="640" height="480" src="https://charts.mongodb.com/charts-project-0-blhfb/embed/charts?id=62810971-ac96-4148-8cec-4accc905b254&maxDataAge=3600&theme=light&autoRefresh=true"></iframe>
        </div>
        
            
    </div>
    
    <script src=""></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    

    <script>
       config={
        
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",

       }
        flatpickr("input[type=datetime-local]", config);
    </script>
    <script>
           let myChart=document.getElementById('myChart').getContext('2d'); 
           let massPopChart= new Chart(myChart,{
                type:'bar',
                data:{
                    labels:[],
                    dataset:[]
                },

           });
           options:{}
    </script>
    <script src="./process.js"></script>
</body>

</html>