<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/practice.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Mukta&family=Oswald:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/admin_home.css">
</head>
<body onload=getinfo()>
<div id="main">
<div class="topnav">
        <a href="home">Home</a>
        <a href="#reservations" onclick="get_reservations()">Reservations</a>
        <a href="#contact" onclick="get_staff()">Staff</a>
        <a href="#about">About</a>
    </div> 
    <div id="dashboard-div">
        <h1 id="heading-tag">Dashboard</h1>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <div id="menu-div">
        <p id="menu-para" class="font">Menu</p>
        <br>
        <br>
        <br>
        <div id="menu-dishes">
            <div id="dishes-div" class="active" onclick=dishes(this.id)><h1>Dishes</h1></div>
            <div id="beverages-div" class="passive" onclick=beverages(this.id)><h1>Beverages</h1></div>
            <div id="desserts-div" class="passive" onclick=desserts(this.id)><h1>Desserts</h1></div>
            <div id="snacks-div" class="passive" onclick=snacks(this.id)><h1>Snacks</h1></div>
        </div>
        <div id="iframe-div-menu">
            <iframe src="../database/dishes_page_db.php" id="iframe-id" frameborder="0"></iframe>
        </div>
        <div id="edit-btn-div">
            <button id="edit-btn" onclick=show() class="passive">Edit</button>
            <button id="done-btn" onclick=hide() class="passive">Done</button>
        </div>
        <div id="btn-div">
                
        </div>
    </div>

    <div id="iframes-div">
        <p>Reservations</p>
        <iframe src="../php/reservation_table_page.php" frameborder="0" id="reservation-iframe"></iframe>
    </div>
    <div id="staff-div">
        <p id="staff-para" class="font">Our staff</p>
        <div id="staff-section1">
            <div id="staff-pic1" class="pic-div">
                <img src="../img/bluebird-provisions-lRAWcT7uwhY-unsplash.jpg" alt="chef image">
                <p id="img1-name">Ishaan Simon</p>
            </div>

            <div id="staff-pic2" class="pic-div">
                <img src="../img/louis-hansel-v3OlBE6-fhU-unsplash.jpg" alt="chef image">
                <p id="img2-name">Dexter Mendez</p>
            </div>
            <div id="staff-pic3" class="pic-div">
                <img src="../img/febrian-zakaria-SiQgni-cqFg-unsplash.jpg" alt="chef image">
                <p id="img3-name">Alejandra Cooper</p>
            </div>
        </div>
        
        <div id="staff-section2">
            <div id="staff-pic4" class="pic-div">
                <img src="../img/man-890885_1280.jpg" alt="chef image">
                <p id="pic4-name">Nathanael Moreno</p>
            </div>
            <div id="staff-pic5" class="pic-div">
                <img src="../img/pexels-cottonbro-studio-3338675.jpg" alt="chef image">
                <p id="pic5-name">Oaklee Beard</p>
            </div>
            <div id="staff-pic6" class="pic-div">
                <img src="../img/rc-cf-FMh5o5m5N9E-unsplash.jpg" alt="chef image">
                <p id="pic6-name">Andrew McKay</p>
            </div>
        </div>
        
    </div>
</div> 
<script src="../js/admin_home.js"></script>   
</body>
</html>
