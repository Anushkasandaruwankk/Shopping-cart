<?php

include "connection.php";

$id = $_row['customer_id'];

$sql = "DELETE FROM shopping_cart WHERE cust_id = $id";
$result = mysqli_query($conn,$sql);

if($result)

{
    echo "query executed";
    echo "$id record is deleted";
}
else{
    echo "query not executed";
    echo "$id record is not deleted";
}
?>




