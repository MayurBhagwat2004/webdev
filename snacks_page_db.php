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

if(isset($_POST["snacks"]))
{
    $snacks = $_POST["snacks"];
}
else
{
    $snacks = "false";
}



// if (isset($_POST["page"])){
//     $_SESSION['page_name'] = $_POST["page"];
    
// }
$conn = new mysqli("localhost","root","root","restaurant");




if($conn)
{
    if($snacks=="true")
    {
        $sql_qry = "select * from snacks limit 0,4";
        $prep_qry = $conn->prepare($sql_qry);
        if($prep_qry->execute())
        {
            $result = $prep_qry->get_result();
        }
        else
        {
            echo "Error while executing query<br>";
        }
    }
    else
    {
        $sql_qry = "select * from snacks limit ?,?";
        $prep_qry = $conn->prepare($sql_qry);
        $prep_qry->bind_param("ii",$items_to_skip,$items_to_display);
        if($prep_qry->execute())
        {
            $result = $prep_qry->get_result();
        }
        else
        {
            echo "Error while executing query<br>";
        }
    }
}
else
{
    echo "Error connecting to database<br>";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../css/snacks.css">
</head>
<body>
    <div id="main-div">
        <div id="snacks-div">
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