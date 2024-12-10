<?php
if(isset($_POST["key_value1"])){
    $old_data1 = $_POST["key_value1"];
}
if(isset($_POST["val_value1"])){
    $old_data2 = $_POST["val_value1"];
}
if(isset($_POST["key_value2"])){
    $old_data3 = $_POST["key_value2"];
}
if(isset($_POST["val_value2"])){
    $old_data4 = $_POST["val_value2"];
}
if(isset($_POST["key_value3"])){
    $old_data5 = $_POST["key_value3"];
}
if(isset($_POST["val_value3"])){
    $old_data6 = $_POST["val_value3"];
}
if(isset($_POST["key_value4"])){
    $old_data7 = $_POST["key_value4"];
}
if(isset($_POST["val_value4"])){
    $old_data8 = $_POST["val_value4"];
}
if(isset($_POST["new_data1"])){
    $new_data1 = $_POST["new_data1"];
}
if(isset($_POST["new_data2"])){
    $new_data2 = $_POST["new_data2"];
}
if(isset($_POST["new_data3"])){
    $new_data3 = $_POST["new_data3"];
}
if(isset($_POST["new_data4"])){
    $new_data4 = $_POST["new_data4"];
}
if(isset($_POST["new_data5"])){
    $new_data5 = $_POST["new_data5"];
}
if(isset($_POST["new_data6"])){
    $new_data6 = $_POST["new_data6"];
}
if(isset($_POST["new_data7"])){
    $new_data7 = $_POST["new_data7"];
}
if(isset($_POST["new_data8"])){
    $new_data8 = $_POST["new_data8"];
}

$conn = new mysqli("localhost","root","root","restaurant");
if(isset($_POST["dish_page"])){
    $dish_page = $_POST["dish_page"];
    if($dish_page=="active"){
        if($conn){
            $update_query1 = "update dishes set NAME = ? ,PRICE = ? where NAME = ?";
            $prepare_query1 = $conn->prepare($update_query1);
            $prepare_query1->bind_param("sss",$new_data1,$new_data2,$old_data1);
        
            $update_query2 = "update dishes set NAME = ? ,PRICE = ? where NAME = ?";
            $prepare_query2 = $conn->prepare($update_query1);
            $prepare_query2->bind_param("sss",$new_data3,$new_data4,$old_data3);
        
            $update_query3 = "update dishes set NAME = ? ,PRICE = ? where NAME = ?";
            $prepare_query3 = $conn->prepare($update_query3);
            $prepare_query3->bind_param("sss",$new_data5,$new_data6,$old_data5);
        
            $update_query4 = "update dishes set NAME = ? ,PRICE = ? where NAME = ?";
            $prepare_query4 = $conn->prepare($update_query4);
            $prepare_query4->bind_param("sss",$new_data7,$new_data8,$old_data7);
            
            
            if($prepare_query1->execute()){
                if($prepare_query2->execute()){
                    if($prepare_query3->execute()){
                        if($prepare_query4->execute()){
                            if($prepare_query4->execute()){
                                echo "all records updated";
                            }
                            else{
                                echo "updation failed";
                            }
                        }
                        else{
                            echo "updation failed";
                        }
                    }
                    else{
                        echo "updation failed";
                    }
                }
                else{
                    echo "updation failed";
                }
            }
            else{
                echo "updation failed";
            }
           
        }
    }
}

if(isset($_POST["beverage_page"])){
    $beverage_page = $_POST["beverage_page"];
    if($beverage_page=="active"){
        if($conn){
            $update_query1 = "update beverages set NAME = ? ,PRICE = ? where NAME = ?";
            $prepare_query1 = $conn->prepare($update_query1);
            $prepare_query1->bind_param("sss",$new_data1,$new_data2,$old_data1);
        
            $update_query2 = "update bevrages set NAME = ? ,PRICE = ? where NAME = ?";
            $prepare_query2 = $conn->prepare($update_query1);
            $prepare_query2->bind_param("sss",$new_data3,$new_data4,$old_data3);
        
            $update_query3 = "update beverages set NAME = ? ,PRICE = ? where NAME = ?";
            $prepare_query3 = $conn->prepare($update_query3);
            $prepare_query3->bind_param("sss",$new_data5,$new_data6,$old_data5);
        
            $update_query4 = "update beverages set NAME = ? ,PRICE = ? where NAME = ?";
            $prepare_query4 = $conn->prepare($update_query4);
            $prepare_query4->bind_param("sss",$new_data7,$new_data8,$old_data7);
        
            
            if($prepare_query1->execute()){
                if($prepare_query2->execute()){
                    if($prepare_query3->execute()){
                        if($prepare_query4->execute()){
                            if($prepare_query4->execute()){
                                echo "all records updated";
                            }
                            else{
                                echo "updation failed";
                            }
                        }
                        else{
                            echo "updation failed";
                        }
                    }
                    else{
                        echo "updation failed";
                    }
                }
                else{
                    echo "updation failed";
                }
            }
            else{
                echo "updation failed";
            }
           
        }
    }
}

if(isset($_POST["dessert_page"])){
    $dessert_page = $_POST["dessert_page"];
    if($dessert_page=="active"){
        if($conn){
            $update_query1 = "update desserts set NAME = ? ,PRICE = ? where NAME = ?";
            $prepare_query1 = $conn->prepare($update_query1);
            $prepare_query1->bind_param("sss",$new_data1,$new_data2,$old_data1);
        
            $update_query2 = "update desserts set NAME = ? ,PRICE = ? where NAME = ?";
            $prepare_query2 = $conn->prepare($update_query1);
            $prepare_query2->bind_param("sss",$new_data3,$new_data4,$old_data3);
        
            $update_query3 = "update desserts set NAME = ? ,PRICE = ? where NAME = ?";
            $prepare_query3 = $conn->prepare($update_query3);
            $prepare_query3->bind_param("sss",$new_data5,$new_data6,$old_data5);
        
            $update_query4 = "update desserts set NAME = ? ,PRICE = ? where NAME = ?";
            $prepare_query4 = $conn->prepare($update_query4);
            $prepare_query4->bind_param("sss",$new_data7,$new_data8,$old_data7);
        
            if($prepare_query1->execute()){
                if($prepare_query2->execute()){
                    if($prepare_query3->execute()){
                        if($prepare_query4->execute()){
                            if($prepare_query4->execute()){
                                echo "all records updated";
                            }
                            else{
                                echo "updation failed";
                            }
                        }
                        else{
                            echo "updation failed";
                        }
                    }
                    else{
                        echo "updation failed";
                    }
                }
                else{
                    echo "updation failed";
                }
            }
            else{
                echo "updation failed";
            }
           
        }
    }
}
if(isset($_POST["snack_page"])){
    $snack_page =$_POST["snack_page"];
    
if($snack_page=="active"){
    if($conn){
        $update_query1 = "update snacks set NAME = ? ,PRICE = ? where NAME = ?";
        $prepare_query1 = $conn->prepare($update_query1);
        $prepare_query1->bind_param("sss",$new_data1,$new_data2,$old_data1);
    
        $update_query2 = "update snacks set NAME = ? ,PRICE = ? where NAME = ?";
        $prepare_query2 = $conn->prepare($update_query1);
        $prepare_query2->bind_param("sss",$new_data3,$new_data4,$old_data3);
    
        $update_query3 = "update snacks set NAME = ? ,PRICE = ? where NAME = ?";
        $prepare_query3 = $conn->prepare($update_query3);
        $prepare_query3->bind_param("sss",$new_data5,$new_data6,$old_data5);
    
        $update_query4 = "update snacks set NAME = ? ,PRICE = ? where NAME = ?";
        $prepare_query4 = $conn->prepare($update_query4);
        $prepare_query4->bind_param("sss",$new_data7,$new_data8,$old_data7);
    
        if($prepare_query1->execute()){
            if($prepare_query2->execute()){
                if($prepare_query3->execute()){
                    if($prepare_query4->execute()){
                        if($prepare_query4->execute()){
                            echo "all records updated";
                        }
                        else{
                            echo "updation failed";
                        }
                    }
                    else{
                        echo "updation failed";
                    }
                }
                else{
                    echo "updation failed";
                }
            }
            else{
                echo "updation failed";
            }
        }
        else{
            echo "updation failed";
        }
       
    }
}

}


?>
