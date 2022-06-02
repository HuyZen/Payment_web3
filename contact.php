<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BlockChain</title>
    <link rel="stylesheet" href="style_contact.css">
   
    <script src="https://kit.fontawesome.com/7e147dbf84.js" crossorigin="anonymous"></script>
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
        <div class="khung">
        <div class="contact">

            <form action="https://formspree.io/f/mnqwlqgo" method="POST" >
                
            <div class="input-group">
                <input type="text" id="name" name="name" required>
                <label for="name"><i class="fa-solid fa-user"></i> Your Name</label>
            </div>
            <div class="input-group">
                <input type="number" id="number" name="number" required>
                <label for="text"><i class="fa-solid fa-phone"></i> Phone No.</label>
            </div>
            <div class="input-group">
                <input type="text" id="email" name="email" required>
                <label for="email"><i class="fa-solid fa-envelope"></i> Email Id</label>
            </div>
            <div class="input-group">
                <textarea  id="message"  rows="8" name="message" required ></textarea>
                <label for="message"><i class="fa-solid fa-message"></i> Your Message</label>
            </div>
                <button type="submit" >SUBMIT <i class="fa-solid fa-paper-plane"></i></button>
            </form>
        </div>  
        </div>   
    </div>
   
    
</body>  
</html>
