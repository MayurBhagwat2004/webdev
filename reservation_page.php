<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../js/reservation.js"></script>
    <link rel="stylesheet" href="../css/reservation.css">
</head>
<body>
    <div id="main-div">
        <div id="form-div">
        
                <img src="../img/pexels-ella-olsson-1640773.jpg" alt="">
            <div id="form">
                <form action="" id="form-id">
                    <label>Enter name: </label>
                    <input type="text" id="name_id" placeholder="Enter name">
                    <br>
                    <label>Enter email: </label>
                    <input type="text" id="email_id" placeholder="Enter email">
                    <br>
                    <label>Enter number: </label>
                    <input type="number" id="number_id" placeholder="Enter number">
                    <br>
                    <label>Needed seats: </label>
                    <input type="number" id="seats_id" placeholder="Enter needed seats">
                    <br>
                    <label>Select date: </label>
                    <input type="date" id="date_id">
                    <br>
                    <label>Select time: </label>
                    <input type="time" id="time_id">
                    <br>
                    <input type="button" id="submit_id" value="done" onclick=validate()>
                </form>
            </div>
            <p id="error_msg_id" style="visibility:hidden;"></p>
        </div>
    </div>
    <div id="footer-div">
    <div id="contact-div">
        <h1 id="contact">Contact us</h1>
        <br>
        <br>
        <br>
        <p class="info-font">
        <b>Address:</b>
        798 South Park Avenue, New York, USA 
        </p>
        <p class="info-font">
            <b>Email:</b>
            companyabc@email.com
        </p>
    </div>
    <br><br><br><br>
        <p id="para1" class="info-font">©  2020 Company - All Rights Reserved.</p>
    </div>
</body>
</html>