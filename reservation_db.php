<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number_id'];
$seats = $_POST['seats'];
$date = $_POST['date'];
$time = $_POST['time'];
$insert_qry = "insert into reservations(cust_name,cust_email,cust_no,cust_seat,resv_date,resv_time) values(?,?,?,?,?,?)";

$servername= "localhost";
$username = "root";
$pass = "root";
$db_name = "restaurant";


$conn = new mysqli($servername,$username,$pass,$db_name);
if($conn){
    echo "connection successful<br>";
    $prep_qry = $conn->prepare($insert_qry);
    $prep_qry->bind_param('sssiss',$name,$email,$number,$seats,$date,$time,);
    if($prep_qry->execute()){
        echo "Data inserted";
    }
    else{
        echo "Error while inserting data<br>";
    }
}
else{
    echo "Error while connecting to database";
    echo $conn->error;
}

$conn->close();
?>