<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <form  method="post" style="margin: 40px 30px;padding: 10px;" action="update.php">
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Early name</label>
            <input type="text" class="form-control"  placeholder="" name="ename" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">New name</label>
            <input type="text" class="form-control"  placeholder="" name="nname" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary col-md-2" style="margin-top:20px" name="submit">Edit</button>

    <?php
    include "connection.php";

    $query = "SELECT * FROM `shopping_cart`";
    $result = mysqli_query($conn,$query);

 
 