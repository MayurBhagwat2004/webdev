<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

<div class="main-div">
    <div id="header">
        <div class="right-section">
            <div class="menu-items-containers">
                <button onclick="redirect_to_login()">Login</button>
            </div>
            <div class="menu-items-containers">
                <button onclick="redirect_to_about()">About</button>
            </div>

        </div>
    </div>
    
    <div class="img-div">
        <img src="../img/Home.png" alt="background-image">
    </div>

    <div class="login-form-div">
        <div class="login-div-items">
            <div id="first-name-div">
                <p class="input-font">First Name</p>
                <input type="text" name="" id="first-name" class="inputs" placeholder="First Name">
            </div>    
            <div id="last-name-div">
                <p class="input-font">Last Name</p>
                <input type="text" id="last-name" class="inputs" placeholder="Last Name">
            </div>
            <div class="email-div">
                <p class="input-font">Email</p>    
                <input type="email" name="" id="email" class="inputs" placeholder="Email">
            </div>
            <div class="pass-div">
                <p class="input-font">Password</p>
                <input type="text" name="" id="pass" class="inputs" placeholder="Password">
            </div>
            <div class="submit-btn">
                <button onclick="register()">Submit</button>
            </div>
        </div>

    </div>
</div>

<script src="../js/register.js"></script>
</body>
</html>