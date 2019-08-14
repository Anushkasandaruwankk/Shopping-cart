<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<table class="table table-hover table-bordered">
<thead>
  <tr>
    <th scope="col">Item Name</th>
    <th scope="col">Item Numbers</th>
    <th scope="col">Total Item</th>
    <th scope="col">price</th>
    <th scope="col">Order date </th>
    <th scope="col">Operations</th>
  </tr>
</thead>
<tbody>
<?php
    include "connection.php";
    $query = "SELECT * FROM `shopping_cart`";
    $result = mysqli_query($conn,$query);

    while($raw = mysqli_fetch_assoc($result)){
        echo 
            '<tr>
                <td>'.$raw['avail_item_names'].'</td>
                <td>'.$raw['avail_item_numbers'].'</td>
                <td>'.$raw['total_number_items'].'</td>
                <td>'.$raw['total_price'].'</td>
                <td>'.$raw['order_date']."</td>
                <td><a href='delete.php?customer_id=".$raw['cust_id']."'>DELETE</td>
                <td><a href='update_name.php?customer_id=".$raw['cust_id']."'>UPDATE</td>
            </tr>";
    }
?>
  </tbody>
</table>