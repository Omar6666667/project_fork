<table class=" table  table-hover table-bordered text-center ">
    <thead class=" thead-dark bg-primary ">
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">controls</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $select = "SELECT * FROM pr ";
        $result = $conn->query($select);
        while ($pro = $result->fetch_assoc()) {
        ?>
            <tr>
                <th scope="row"><?= $pro['id'] ?></th>
                <td><?= $pro['name'] ?></td>


                <td>

                    <a href="?action=edit&id=<?= $pro['id'] ?>"> <button class="btn btn-primary"> Edit </button></a>
                    <a href="fun/pr/delete_pr.php?id=<?= $pro['id'] ?>"> <button class="btn btn-danger"> Delete </button></a>

                </td>

            </tr>


        <?php
        }




        ?>
    </tbody>
</table>


<a href="?action=add"> <button class="btn btn-info btn-lg">Add product</button></a>