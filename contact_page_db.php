<?php

if(isset($_POST["email"]))
{
    $email = $_POST["email"];
}
if(isset($_POST["message"]))
{
    $message = $_POST["message"];
}

$conn = new mysqli("localhost","root","root","restaurant");

if($conn)
{
    $qry = "insert into contact(email,message) values(?,?);";
    $prp_qry = $conn->prepare($qry);
    $prp_qry->bind_param("ss",$email,$message);
    if($prp_qry->execute())
    {
        echo "Records inserted";
    }
    else
    {
        echo "Error while inserting data into database";
    }
}
else
{
    echo "Error while connecting to database";
}
?>