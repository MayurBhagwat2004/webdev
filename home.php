<?php
session_start();
if(isset($_SESSION["username"]))
{
}
else if($_SESSION["username"]==null)
{
  header("Location:http://localhost/Restaurant/Restaurant/php/login_page.php");
}

$conn = new mysqli("localhost","root","root","restaurant");

if($conn){
  $qry = "select * from dishes limit 0,4";
  $prep_qry = $conn->prepare($qry);
  if($prep_qry->execute()){
    $data = $prep_qry->get_result();
  }
  else{
    echo "Error while fetching data";
  }
}
else{
  echo "Error while connecting to database";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div id="section-01-div">
  <div id="navbar">
    <ul>
      <li class="btn btn-three"><a href="#home-id">Home</a></li>
      <li class="btn btn-three"><a onclick=menu_redirect()>Menu</a></li>
      <li class="btn btn-three"><a onclick=about_redirect()>About</a></li>
    </ul>
    <div class="user-info">
      <p class="user-name">
        <?php
        if(isset($_SESSION["username"]))
        {
          echo "Hello ",$_SESSION["username"];
        }
      ?>
      </p>
      <button class="user-info-btn" onclick="logout()">
        <?php
        if(isset($_SESSION["username"]))
        {
          echo "Logout";
        }
        else
        {
          echo "Login";

        }
        ?>

      </button>
    </div>
  </div>

  <div id="food-img-div">
    <img src="../img/pexels-ella-olsson-1640773.jpg" alt="">
  </div>
  
  <div id="book-div">
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div id="main-book-div">
      <p id="reserve-para-id" class="para">Wanna reserve yourself a seat?</p>
      <button class="book-btn" role="button" onclick=book() hreF="../php/reservation_page.php">Book seat</button>
    </div>
  </div>

</div>

<div id="more-info-div">
  <div id="menu-div">
    <h1 id="headline" class="para">check out our trending dishes</h1>
    <br>
    <br>
    <br>
    <br>
    <div id="data-div">
      <table>
      <?php
      while($row = $data->fetch_assoc()){
      ?> 
        <tr>
          <td><?php echo $row["name"]?></td>
          <td><?php echo $row["price"]?></td>
        </tr>
        <?php
      }
        ?>
      </table>
    </div>
    <br>
    <br>
    <div id="more-menu-btn-div">
        <button onclick=menu_redirect() id="more-btn-id" class="para">More</button>
    </div>
  </div>
</div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 
 <br>
<div id="about-us-div">
  <br>
  <br>
  <h1 id="about-headline" class="para">About us</h1>
    <div id="about-img-div">
      <img src="../img/about_pic_01.jpg" alt="People eating food">
    </div>
    <div id="para-div">
      <p id="about-para">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex odio provident enim, sit reprehenderit culpa architecto itaque distinctio nam recusandae numquam corporis id officiis, deserunt nostrum non doloremque possimus rem, unde nemo veniam! Dolores distinctio tempore eveniet maiores error dolore dolor voluptates exercitationem officia quam!
      </p>
      </div>
      <div id="about-btn-div">
        <button id="about-btn" onclick=about_redirect()>Know more</button>
      </div>
</div>

<br>
<br>
<br><br><br><br><br><br><br><br><br>

<div id="reserve-div">
  <div id="reserve-img">
    <img src="../img/mainpage.jpg" alt="">
  </div>
  <div id="reserve-para">
    <p class="font-style">Come join us</p>
    <p id="resv-para2" class="font-style">reserve your table</p>
    <button id="resv-btn" class="book-btn" onclick=book()>Reserve</button>
  </div>
</div>
  
<br><br><br><br><br><br><br>
<div id="contact-us-div">
  <h1 id="contact-us-para" class="para">Contact us</h1>
  <br>
  <br>
  <br>

  <div id="contact-form">
    <p id="contact-label1">Email:</p>
    <br>
    <input type="email" id="email-id" class="form-input">
    <br>
    <br>
    <p id="contact-label2">
    Message:
    </p>
    <br>

    <input type="text" id="message-id" class="form-input">
  </div>
  <br>
  <br>
  <div id="contact-btn">
    <input type="button" value="Send" onclick=send()></button>
  </div>



</div>
<div id="footer-div">
<footer>
  <div class="footer-container">
    <div class="social-icons">
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-google-plus"></i>
      <i class="fa-brands fa-youtube"></i>
    </div>

    <div class="footer-nav">
      <ul>
        <li><a href="http://localhost/Restaurant/Restaurant/php/home.php">Home</a></li>
        <li><a href="http://localhost/Restaurant/Restaurant/php/menu.php">Menu</a></li>
        <li><a href="http://localhost/Restaurant/Restaurant/php/about.php">About Us</a></li>
      </ul>
    </div>

  </div>
  <div class="footer-bottom">
      <p>copyright &copy;2024 <span class="designer">Golden Willow Bistro</span></p>
    </div>
</footer>
</div>
<script src="../js/home.js"></script>

</body>


</html>