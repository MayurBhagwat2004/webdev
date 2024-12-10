<?php
$conn = new mysqli("localhost","root","root","restaurant");
if(isset($_POST['items_to_skip'])){
    $items_to_skip = $_POST['items_to_skip'];
    if(isset($_POST['items_to_display'])){
        $items_to_display = $_POST['items_to_display'];        
        if($conn){
            $fetch_query = "select cust_name,cust_email,cust_no,cust_seat,resv_date,resv_time from reservations limit ?,?;";
            $prepare_query = $conn->prepare($fetch_query);
            $prepare_query->bind_param("ii",$items_to_skip,$items_to_display);
            if($prepare_query->execute()){
                $data = $prepare_query->get_result();
            }
            else{
                echo "Error while executing the fetching query";
            }
        }
    }
}
else{
    $fetch_query = "select cust_name,cust_email,cust_no,cust_seat,resv_date,resv_time from reservations limit 0,5;";
    $prepare_query = $conn->prepare($fetch_query);
    if($prepare_query->execute()){
        $data = $prepare_query->get_result();
    }
    else{
        echo "Error while executing the fetching query";
    }
}

if(isset($_POST["name"])){
    $record_to_delete = $_POST["name"];
    $query = "delete from reservations where cust_name = ?";
    $prepare_query = $conn->prepare($query);
    $prepare_query->bind_param("s",$record_to_delete);
    if($prepare_query->execute()){
        echo "Record deleted";
    }
    else{
        echo "Record not deleted";
    }
}
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/reservation_page_db.css">
</head>
<body>
<div id="reservation-div">
    <table id="reservation-table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Seats</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
        <?php
        $i=1;
        while($row = $data->fetch_assoc()){
            
        ?>
        <tr>
            <td><?php echo $row["cust_name"]?></td>
            <td><?php echo $row["cust_email"]?></td>
            <td><?php echo $row["cust_no"]?></td>
            <td><?php echo $row["cust_seat"]?></td>
            <td><?php echo $row["resv_date"]?></td>
            <td><?php echo $row["resv_time"]?></td>
            <td><button id=<?php echo $i?> onclick="delete_record(this.id)">Delete</button></td>    
        </tr>
        <?php
        $i++;
        }
        ?>
    </table>

</div>
<script src="../js/reservation_page.js"></script>
</body>
</html>
