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
if(isset($_POST["dishes"]))
{
    $dishes = $_POST["dishes"];
}
else
{
    $dishes = "false";
}


$conn = new mysqli("localhost","root","root","restaurant");


if($conn)
{
  if($clicked=="true"){
    $sql_qry = "select * from dishes limit ?,?";
    $prepare_qry = $conn->prepare($sql_qry);
    $prepare_qry->bind_param("ii",$items_to_skip,$items_to_display);

    if($prepare_qry->execute())
    {
      $result = $prepare_qry->get_result();
    }
    else
    {
      echo "Error while fetching the dishes data<br>";
    }
  }
  else
  {
      $sql_qry = "select * from dishes limit 0,4";
      $prepare_qry = $conn->prepare($sql_qry);

      if($prepare_qry->execute())
      {
        $result = $prepare_qry->get_result();
      }
      else
      {
        echo "Error while fetching the dishes data<br>";
      }
  }

}
else
{
  echo "Error while connecting to database<br>";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="../css/dishes.css">
</head>
<body>
<div id="table-div">
  <table id="table-id">
    <?php
    while($rows = $result->fetch_assoc())
    {
    ?>
    <tr>
      <td><?php echo $rows["name"]?></td>
      <td><?php echo $rows["price"]?></td>
    </tr>
    <?php }?>
  </table>    
</div>


</body>
</html>