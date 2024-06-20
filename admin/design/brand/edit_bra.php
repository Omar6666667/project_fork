<?php

$id = $_GET['id'];

$select = "SELECT * FROM brand WHERE id = '$id'";
$result = $conn->query($select);
$product = $result->fetch_assoc();


?>

<form method="POST" action="fun/brand/do_edit_bra.php?id=<?= $id ?>">
    <div class="form-group">
        <label for="name" style="font-weight: bold;">Brand name :</label>
        <input type="text" class="form-control" name="name" value="<?= $product['name'] ?>">
    </div>



    <input type="submit" value="Update Brand" class="form-control btn btn-primary">

</form>