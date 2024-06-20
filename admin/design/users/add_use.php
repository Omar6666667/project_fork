<form method="POST" action="fun/users/do_add_use.php">
    <div class="form-group">
        <label for="username" style="font-weight: bold;">Username :</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
        <label for="password" style="font-weight: bold;">Password :</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <label for="email" style="font-weight: bold;">Email :</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label for="gender" style="font-weight: bold;">Gender :</label>
        <select class="form-control" name="gender">
            <?php
            $select_cat = "SELECT * FROM gender ";
            $result_cat = $conn->query($select_cat);
            while ($cat = $result_cat->fetch_assoc()) {
            ?>
                <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>

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
                <option value="<?= $brand['id'] ?>"><?= $brand['name'] ?></option>

            <?php

            }

            ?>
        </select>
    </div>

    <input type="submit" value="Add user" class="form-control btn btn-info">

</form>