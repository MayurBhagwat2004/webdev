<?php
session_start();
$conn = new mysqli("localhost","root","root","restaurant");

if(isset($_POST["dish_page_count"])){
    if($conn)
    {
        $select_qry = "select * from dishes";

        $qry_data = $conn->query($select_qry);

        if($qry_data)
        {
            $total_num_of_items = mysqli_num_rows($qry_data);
            $items_per_pages = 4;
            $total_num_of_pages = ceil($total_num_of_items/$items_per_pages);
            unset($_POST["dish_page_count"]);
            
        }
        else
        {
            echo "Error while running the query<br>";
        }
    }
    else
    {
        echo "Error connecting to database<br>";
    }   
}

else if(isset($_POST["bev_page_count"])){
    if($conn)
    {
        $select_qry = "select * from beverages";

        $qry_data = $conn->query($select_qry);

        if($qry_data)
        {
            $total_num_of_items = mysqli_num_rows($qry_data);
            $items_per_pages = 4;
            $total_num_of_pages = ceil($total_num_of_items/$items_per_pages);
            unset($_POST["bev_page_count"]);
            
        }
        else
        {
            echo "Error while running the query<br>";
        }
    }
    else
    {
        echo "Error connecting to database<br>";
    }
}
else if(isset($_POST["des_page_count"])){
    if($conn)
    {
        $select_qry = "select * from desserts";

        $qry_data = $conn->query($select_qry);

        if($qry_data)
        {
            $total_num_of_items = mysqli_num_rows($qry_data);
            $items_per_pages = 4;
            $total_num_of_pages = ceil($total_num_of_items/$items_per_pages);
            unset($_POST["des_page_count"]);
            
        }
        else
        {
            echo "Error while running the query<br>";
        }
    }
    else
    {
        echo "Error connecting to database<br>";
    }
}
else if(isset($_POST["snack_page_count"])){
    if($conn)
    {
        $select_qry = "select * from snacks";

        $qry_data = $conn->query($select_qry);

        if($qry_data)
        {
            $total_num_of_items = mysqli_num_rows($qry_data);
            $items_per_pages = 4;
            $total_num_of_pages = ceil($total_num_of_items/$items_per_pages);
            unset($_POST["snack_page_count"]);
            
        }
        else
        {
            echo "Error while running the query<br>";
        }
    }
    else
    {
        echo "Error connecting to database<br>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $num = 1;
    while($num<=$total_num_of_pages){?>
    <button id="<?php echo $num?>" border:2px; onclick='page(this.id);'><?php echo $num?></button>
    <?php
    $num=$num+1;
    }
    ?>
</body>
</html>