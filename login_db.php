<?php
session_start();
$email = $_POST["email"];
$pass = $_POST["password"];


$servername = "localhost";
$username = "root";
$pass = "root";
$dbname = "restaurant";


$conn = new mysqli($servername,$username,$pass,$dbname);
if($conn)
{
  $verify_query = "select email,pass from register where email = ?";
  $select_query = $conn->prepare($verify_query);
  $select_query->bind_param('s',$email);


  if($select_query->execute())
  {
    $result_set = $select_query->get_result();
    $user_data = $result_set->fetch_assoc();
    if($user_data["email"]==$email)
    {
  
        $username_query = "select firstname from register where email=?";
        $username_prepare_query = $conn->prepare($username_query);
        $username_prepare_query->bind_param('s',$email);
  
        if($username_prepare_query->execute())
        {
          $username_result_set = $username_prepare_query->get_result();
          $username = $username_result_set->fetch_assoc();
          $_SESSION["username"] = $username["firstname"];


          echo "1";
        
      }
      else
      {
        echo "0";
      }
      }
      
  }
}

?>