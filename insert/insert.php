<?php

if(isset($_POST['submit'])) {
include ('connection.php');

$item_name = $_POST['iname'];
$item_number = $_POST['inumber'];
$total = $_POST['total'];
$price = $_POST['price'];
$date = $_POST['date'];

echo $date;


$sql =  "INSERT INTO shopping_cart(avail_item_names,avail_item_numbers,total_number_items,total_price,order_date) 
    	VALUES ('$item_name','$item_number','$total','$price','$date')" ;
    
mysqli_query($conn,$sql);

}

?>
