<div class="col-sm-3">
    <div class="left-sidebar">
        <h2><?= __('Category') ?></h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

            <?php
            $selectCat = "SELECT * FROM category";
            $resultCat = $conn->query($selectCat);
            while ($cat = $resultCat->fetch_assoc()) {
            ?>




                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="shop.php?catid=<?= $cat['id'] ?>"><?= $cat['name'] ?></a></h4>
                    </div>
                </div>

            <?php
            }



            ?>

        </div><!--/category-products-->

        <div class="brands_products"><!--brands_products-->
            <h2><?= __('Brands') ?></h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                    <?php
                    $selectBrand = "SELECT * FROM brand";
                    $resultBrand = $conn->query($selectBrand);
                    while ($brand = $resultBrand->fetch_assoc()) {
                    ?>
                        <li><a href="shop.php?brandid=<?= $brand['id'] ?>"> <span class="pull-right">(<?php

                                                                                                        $brand_id = $brand['id'];
                                                                                                        $select = "SELECT * FROM products WHERE brand = '$brand_id'";
                                                                                                        $result = $conn->query($select);
                                                                                                        echo $result->num_rows;




                                                                                                        ?>)</span><?= $brand['name'] ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div><!--/brands_products-->





    </div>
</div>