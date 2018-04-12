<?php
include_once ('productController.php');

$qResult=index();

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
<a href="create.php" class="btn btn-success">Create New User</a>
<hr>
<table class="table table-hover">
    <tr>
        <td>Sl</td>
        <td>Name</td>
        <td>qty</td>
        <td>Action</td>
    </tr>
    <?php
    if (mysqli_num_rows($qResult)>0){
        while ($row=mysqli_fetch_assoc($qResult)){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['qty']; ?></td>
                <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |  <a href="productController.php?nssl=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to Remove?');">Delete</a></td>
            </tr>
            <?php
        }
    }else{
        echo "there is no data";
    }
    ?>

</table>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>