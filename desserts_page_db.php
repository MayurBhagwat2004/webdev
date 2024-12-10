<?php

if(isset($_POST["items_to_skip"]))
{
    $items_to_skip = $_POST["items_to_skip"];
}
else
{
    $items_to_skip = 0;
}
if(isset($_POST["items_to_display"]))
{
    $items_to_display = $_POST["items_to_display"];
}
else
{
    $items_to_display = 0;
}
if(isset($_POST["clicked"]))
{
    $clicked = $_POST["clicked"];
}
else
{
    $clicked = "false";
}
if(isset($_POST["desserts"]))
{
    $desserts = $_POST["desserts"];
}
else
{
    $desserts = "false";
}


session_start();
$conn = new mysqli("localhost","root","root","restaurant");

if($conn)
{
    if($clicked=="false")
    {
        $sql = "select * from desserts limit 0,4";
        $prep_qry = $conn->prepare($sql);
        if($prep_qry->execute())
        {
            $result = $prep_qry->get_result();
        }
        else
        {
            echo "Error while fetching data";
        }
    }
    else
    {
        $sql = "select * from desserts limit ?,?";
        $prep_qry = $conn->prepare($sql);
        $prep_qry->bind_param("ii",$items_to_skip,$items_to_display);
        if($prep_qry->execute())
        {
            $result = $prep_qry->get_result();
        }
        else
        {
            echo "Error while fetching data";
        }
    }
}
else
{
    echo "Error connecting to database";
}



$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../css/desserts.css">
</head>
<body>
    <div id="main-div">
        <div id="dessert-div">
            <table id="table-id">
            <?php while($row = $result->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["price"]?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>