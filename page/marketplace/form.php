<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require '../components/header.php'; ?>
    <?php require '../functions/mysqliconnect.php' ?>
    <div class="container">
        <div class="m-2">
            <h2>Sell things here.</h2>
            <form action="/php-youngbook/page/functions/marketplace_new.php" method="post">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Product Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category">
                    <?php
                    $sql = "SELECT * FROM `categories`";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)){ ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                        <?php }
                    }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Price</label>
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rp</div>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="price">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right">Add New Product</button>
                </div>
                </form>
        </div>
    </div>
</body>
</html>