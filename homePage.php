<?php

session_start();
include_once('includes/loginForHeader.php');
include_once('includes/db_connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crocodiles</title>
    <link rel="stylesheet" href="stylesheets/index.css">
</head>
<body>
<div class="header">
<a href="#default" id="logo" ><img class="logo" src="https://1000logos.net/wp-content/uploads/2018/11/Crocs.jpg" alt="CompanyLogo" ></a>
<div class="header-right">
    <a class="active"  href="homePage.php">Home</a>
    <a href="shop.php">Shop</a>
    <a href="orders.php">Orders</a>
<?php include_once("header.php") ?>
</div>
</div>
      <div class="content">
        <h1>Crocs</h1>
        <p id="backShop"><b>Buy NOW</b></p>
        <span>As light hearted as they are lightweight, Crocs footwear provides complete comfort and support for any occasion and every season.
            They might bite though..
        </span>
        <div class="images">
            <li><img src="https://clogsland.com/wp-content/uploads/2020/07/DSC1287-scaled.jpg" alt="Clogs"></li>
            <li><img src="https://media.gq.com/photos/60a7f915ae317df95ced14b2/master/pass/sandals.jpg" alt="Sandals"></li>
            <li><img src="https://thumbs.dreamstime.com/b/more-orphan-socks-odd-whose-mates-have-been-lost-hanging-clothesline-shot-white-background-35663687.jpg" alt="Socks"></li>
        </div>
        <div id="items">
            <p id="clogs">Clogs</p>
            <span>Ventilation ports add breathability and help shed water and debris.</span><br><br>
            <label for="clogsPrice"><i><b>$10.00/each</b></i></label>
            <input type="text" id="clogsPrice"><br><br>
    
            <p id="sandals">Sandals</p>
            <span>Adjustable turbo heel straps for a snug, accommodating fit.</span><br><br>
            <label for="sandalsPrice"><i><b>$15.00/each</b></i></label>
            <input type="text" id="sandalsPrice"><br><br>
    
            <p id="socks">Socks</p>
            <span>With UV Protection and a water-repellent finish.</span><br><br>
            <label for="socksPrice"><i><b>$5.00/each</b></i></label>
            <input type="text" id="socksPrice"><br><br>
        </div>
      </div>
      <footer>
        <p>© Smit Mehta & Iulia Danilov</p>
    </footer>
</body>
</html>