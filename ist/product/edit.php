<?php
$id=$_REQUEST['id'];
include_once ('productController.php');

$row=edit($id);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <div class="row">
        <a href="index.php" class="btn btn-success">Home</a>
        <hr>
        <form action="productController.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']?>">
            </div>
            <div class="form-group">
                <label for="qty">Qty:</label>
                <input type="number" class="form-control" id="qty" name="qty" value="<?php echo $row['qty']?>" >
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <input type="reset" value="Reset" class="btn btn-warning">
            <input type="submit" value="Update" name="update" class="btn btn-info">

        </form>
    </div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

