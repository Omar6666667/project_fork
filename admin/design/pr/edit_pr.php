<?php

$id = $_GET['id'];

$select = "SELECT * FROM pr WHERE id = '$id'";
$result = $conn->query($select);
$product = $result->fetch_assoc();


?>

<form method="POST" action="fun/pr/do_edit_pr.php?id=<?= $id ?>">
    <div class="form-group">
        <label for="name" style="font-weight: bold;">Pr name :</label>
        <input type="text" class="form-control" name="name" value="<?= $product['name'] ?>">
    </div>



    <input type="submit" value="Update pr" class="form-control btn btn-primary">

</form>