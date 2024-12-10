<?php
$conn = new mysqli("localhost","root","root","restaurant");
if($conn){
    $select_query = "select cust_name,cust_email,cust_no,cust_seat,resv_date,resv_time from reservations";
    $prepare_query = $conn->prepare($select_query);
    if($prepare_query->execute()){
        $data = $prepare_query->get_result();
        $num_rows = mysqli_num_rows($data);
        $items_per_page = 5;
        $total_num_pages = ceil($num_rows/$items_per_page);
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="../css/reservation_page.css">
</head>
<body>
<div id="reservation-div">
    <div id="iframe-div">
        <iframe src="../database/reservation_table_db.php" frameborder="0" id="iframe-id"></iframe>
    </div>
    <br><br><br><br><br>
    <div id="btn-div">
        <?php
         $i=1;
         while($i<=$total_num_pages){
        ?>
        <button id=<?php echo $i?> onclick=next_page(this.id);><?php echo $i?></button>
        <?php
        $i=$i+1;
         }
        ?>
    </div>
</div>
<script src="../js/reservation_page.js"></script>
</body>
</html>