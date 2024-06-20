<table class=" table  table-hover table-bordered text-center ">
    <thead class=" thead-dark bg-primary ">
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">image</th>
            <th scope="col">category</th>
            <th scope="col">brand</th>
            <th scope="col">count</th>
            <th scope="col">controls</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $select = "SELECT * FROM products ";
        $result = $conn->query($select);
        while ($pro = $result->fetch_assoc()) {
        ?>
            <tr>
                <th scope="row"><?= $pro['id'] ?></th>
                <td><?= $pro['name'] ?></td>
                <td><?= $pro['price'] ?></td>

                <td><img src="img/<?= $pro['image'] ?>" style="width:100px ; height:100px"></td>

                <td><?php $cat_id = $pro['cat'];
                    $select_cat = "SELECT * FROM category WHERE id  = '$cat_id'";
                    $result_cat = $conn->query($select_cat);
                    $cat = $result_cat->fetch_assoc();
                    echo $cat['name'];
                    ?></td>

                <td><?php $brand_id = $pro['brand'];
                    $select_brand = "SELECT * FROM brand WHERE id = '$brand_id'";
                    $result_brand = $conn->query($select_brand);
                    $brand = $result_brand->fetch_assoc();
                    echo $brand['name'];
                    ?></td>

                <td><?= $pro['count'] ?></td>
                <td>

                    <a href="?action=edit&id=<?= $pro['id'] ?>"> <button class="btn btn-primary"> Edit </button></a>
                    <a href="fun/products/delete_pro.php?id=<?= $pro['id'] ?>"> <button class="btn btn-danger"> Delete </button></a>

                </td>

            </tr>


        <?php
        }




        ?>
    </tbody>
</table>


<a href="?action=add"> <button class="btn btn-info btn-lg">Add product</button></a>