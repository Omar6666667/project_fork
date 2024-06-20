<?php

$id = $_GET['id'];

$select = "SELECT * FROM products WHERE id = '$id'";
$result = $conn->query($select);
$product = $result->fetch_assoc();


?>

<form method="POST" action="fun/products/do_edit_pro.php?id=<?= $id ?>" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name" style="font-weight: bold;">Product name :</label>
        <input type="text" class="form-control" name="name" value="<?= $product['name'] ?>">
    </div>
    <div class="form-group">
        <label for="price" style="font-weight: bold;">Price :</label>
        <input type="number" class="form-control" name="price" value="<?= $product['price'] ?>">
    </div>
    <div class="form-group">
        <label for="count" style="font-weight: bold;">Count :</label>
        <input type="text" class="form-control" name="count" value="<?= $product['count'] ?>">
    </div>
    <div class="form-group">
        <label for="description" style="font-weight: bold;">Description :</label>
        <textarea class="form-control" name="descr" style="height: 150px;"><?= $product['descr'] ?></textarea>
    </div>

    <div class="form-group">
        <label for="image" style="font-weight: bold;">Image :</label>
        <input type="file" class="form-control-file" name="image">
        <br>
        <img src="img/<?= $product['image'] ?>" style="width:150px;height:150px">
    </div>
    <div class="form-group">
        <label for="category" style="font-weight: bold;">Category :</label>
        <select class="form-control" name="category">
            <?php
            $select_cat = "SELECT * FROM category ";
            $result_cat = $conn->query($select_cat);
            while ($cat = $result_cat->fetch_assoc()) {
            ?>
                <option value="<?= $cat['id'] ?>" <?php

                                                    if ($cat['id'] === $product['cat']) {
                                                        echo "selected";
                                                    }




                                                    ?>><?= $cat['name'] ?></option>

            <?php

            }

            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="brand" style="font-weight: bold;">Brand :</label>
        <select class="form-control" name="brand">
            <?php
            $select_brand = "SELECT * FROM brand ";
            $result_brand = $conn->query($select_brand);
            while ($brand = $result_brand->fetch_assoc()) {
            ?>
                <option value="<?= $brand['id'] ?>" <?php

                                                    if ($brand['id'] === $product['brand']) {
                                                        echo "selected";
                                                    }



                                                    ?>><?= $brand['name'] ?></option>

            <?php

            }

            ?>
        </select>
    </div>

    <input type="submit" value="Update product" class="form-control btn btn-primary">

</form>