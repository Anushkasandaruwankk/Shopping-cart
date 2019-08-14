

</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Assignment</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <form  method="post" style="margin: 40px 30px;padding: 10px;" action="insert.php">
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Available itms</label>
            <input type="text" class="form-control"  placeholder="" name="iname" required>
        </div>
    
    
        <div class="form-group col-md-6">
            <label for="inputPassword4">Item Number</label>
            <input type="text" class="form-control"  placeholder="" name="inumber" required>
        </div>
  </div>

  
  
  <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputAddress2">Total noof items</label>
            <input type="text" class="form-control"  placeholder="" name="total" required>
        </div>
  </div>
  <div class="form-group col-md-3">
    <label for="inputAddress">Price</label>
    <input type="text" class="form-control"  placeholder="" name="price" required>
  </div>

  <div class="form-group col-md-4">
      <label for="inputState">Date</label>
      <input id="inputState" class="form-control" name="date" required>
        
      </input>
    </div>
  <div class="form-group col-md-9">
  </div>
  <div class="form-group ">
  <button type="submit" class="btn btn-primary col-md-2" style="margin-top:20px" name="submit">Submit</button>
  </div> 
    </form>
</head>
<body>
    
</body>
</html>
