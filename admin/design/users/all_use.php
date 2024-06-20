<table class=" table  table-hover table-bordered text-center ">
    <thead class=" thead-dark bg-primary ">
        <tr>
            <th scope="col">id</th>
            <th scope="col">username</th>
            <th scope="col">password</th>
            <th scope="col">email</th>
            <th scope="col">gender</th>
            <th scope="col">pr</th>
            <th scope="col">controls</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $select = "SELECT * FROM users ";
        $result = $conn->query($select);
        while ($pro = $result->fetch_assoc()) {
        ?>
            <tr>
                <th scope="row"><?= $pro['id'] ?></th>
                <td><?= $pro['username'] ?></td>
                <td><?= $pro['password'] ?></td>
                <td><?= $pro['email'] ?></td>


                <td><?php $cat_id = $pro['gender'];
                    $select_cat = "SELECT * FROM gender WHERE id  = '$cat_id'";
                    $result_cat = $conn->query($select_cat);
                    $cat = $result_cat->fetch_assoc();
                    echo $cat['name'];
                    ?></td>

                <td><?php $brand_id = $pro['pr'];
                    $select_brand = "SELECT * FROM pr WHERE id = '$brand_id'";
                    $result_brand = $conn->query($select_brand);
                    $brand = $result_brand->fetch_assoc();
                    echo $brand['name'];
                    ?></td>

                <td>

                    <a href="?action=edit&id=<?= $pro['id'] ?>"> <button class="btn btn-primary"> Edit </button></a>
                    <a href="fun/users/delete_use.php?id=<?= $pro['id'] ?>"> <button class="btn btn-danger"> Delete </button></a>

                </td>

            </tr>


        <?php
        }




        ?>
    </tbody>
</table>


<a href="?action=add"> <button class="btn btn-info btn-lg">Add user</button></a>