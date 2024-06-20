<?php

$id = $_GET['id'];

$select = "SELECT * FROM users WHERE id = '$id'";
$result = $conn->query($select);
$product = $result->fetch_assoc();


?>

<form method="POST" action="fun/users/do_edit_use.php?id=<?= $id ?>">
    <div class="form-group">
        <label for="username" style="font-weight: bold;">Username :</label>
        <input type="text" class="form-control" name="username" value="<?= $product['username'] ?>">
    </div>
    <div class="form-group">
        <label for="password" style="font-weight: bold;">Password :</label>
        <input type="password" class="form-control" name="password" value="<?= $product['password'] ?>">
    </div>
    <div class="form-group">
        <label for="email" style="font-weight: bold;">Email :</label>
        <input type="email" class="form-control" name="email" value="<?= $product['email'] ?>">
    </div>

    <div class="form-group">
        <label for="gender" style="font-weight: bold;">Gender :</label>
        <select class="form-control" name="gender">
            <?php
            $select_cat = "SELECT * FROM gender ";
            $result_cat = $conn->query($select_cat);
            while ($cat = $result_cat->fetch_assoc()) {
            ?>
                <option value="<?= $cat['id'] ?>" <?php

                                                    if ($cat['id'] === $product['gender']) {
                                                        echo "selected";
                                                    }




                                                    ?>><?= $cat['name'] ?></option>

            <?php

            }

            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="pr" style="font-weight: bold;">Pr :</label>
        <select class="form-control" name="pr">
            <?php
            $select_brand = "SELECT * FROM pr ";
            $result_brand = $conn->query($select_brand);
            while ($brand = $result_brand->fetch_assoc()) {
            ?>
                <option value="<?= $brand['id'] ?>" <?php

                                                    if ($brand['id'] === $product['pr']) {
                                                        echo "selected";
                                                    }



                                                    ?>><?= $brand['name'] ?></option>

            <?php

            }

            ?>
        </select>
    </div>

    <input type="submit" value="Update user" class="form-control btn btn-primary">

</form>