<?php

if(isset($_POST['submit'])) {
include ('connection.php');

$early_name = $_POST['ename'];
$new_name = $_POST['nname'];

$sql =  "UPDATE shopping_cart SET avail_item_names = '$new_name' WHERE avail_item_names ='$early_name'" ;
    
mysqli_query($conn,$sql);

}

?>
