<?php

$id = $_GET['id'];

$select = "SELECT * FROM category WHERE id = '$id'";
$result = $conn->query($select);
$product = $result->fetch_assoc();


?>

<form method="POST" action="fun/category/do_edit_cat.php?id=<?= $id ?>">
    <div class="form-group">
        <label for="name" style="font-weight: bold;">Product name :</label>
        <input type="text" class="form-control" name="name" value="<?= $product['name'] ?>">
    </div>



    <input type="submit" value="Update product" class="form-control btn btn-primary">

</form>